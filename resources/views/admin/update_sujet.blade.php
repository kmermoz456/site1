<?php

use App\Models\Proposition;
use App\Models\Question;
use App\Models\Sujet;

$onesujet =null;
$onepropo = null;
$onequestion = null;

if(!empty($_GET))
        {
            if(isset($_GET['idp']))
            {

                $id = htmlentities($_GET['idp']);
                $onepropo = Proposition::find($id);


            }


            if(isset($_GET['idq']))
            {

                $id = htmlentities($_GET['idq']);
                $onequestion = Question::find($id);


            }


            if(isset($_GET['ids']))
            {

                $id = htmlentities($_GET['ids']);
                $onesujet = Sujet::find($id);


            }
        }




?>


<h3>Mise à jour</h3>
<div class="container p-3 ">

         <!--Sujet-->
                        <livewire:update-sujet/>
         <div>
         <h4>Sujet</h4>
        <form class="form row" method="post" action="{{route('update',['action' => 'update_sujet'])}}">
            @csrf

            <div class="col-md-4 ">
                    <label for="id" class="form-label">Sujet à modifier</label>
                   <input type="text" id="id" name="id" value="{{$onesujet ? $onesujet->id :''}}" placeholder="l'identifiant de la question">
                </div>

            <div class="form-group">
                <label for="title" class=" ml-1 input-label">Titre</label><input class="form-control" id="title" type="text" required value="{{$onesujet ? $onesujet->title :''}}" name="title"  placeholder="EX: Glucide :les oses">
            </div>
            
            
                <div class="col-md-4 ">
                    <label for="nivau" class="form-label">Nivau:</label>
                    <select class="form-select" name="nivau" id="nivau"  required>
                        <option value="">choisir...</option>
                        <option value="sn1">SN licence1</option>
                        <option value="sn2">SN licence 2</option>

                    </select>
                </div>
                <div class="col-md-4 ">

                    <label for="ue" class="form-label">UE:</label>
                    <select class="form-select" id="ue" name="ue" required>
                        <option value="">choisir...</option>
                        <option value="Biochimie">Biochimie</option>
                        <option value="Biologie cellulaire">Biologie cellulaire</option>

                    </select>

                </div>
                <div class="col-md-4 ">

                    <label for="ue" class="form-label">Type:</label>
                    <select class="form-select" name="type" id="q" required>
                        <option value="QCM">QCM</option>
                        <option value="QCD">QCD</option>

                    </select>

                </div>
         
            
          <div>  <button type="submit" class=" mt-2 btn btn-outline-success">Modifier ce sujet </button></div>
        </form>
            </div>

          <!--Questions-->
          <livewire:update-question/>

        <div class="mt-2">
              
   
                <h3>Question</h3>

      <form class="form row" method="POST" enctype="multipart/form-data"   action="{{route('update',['action'=>'update_question'])}}">
            @csrf
                <!---->

            <div class="col-md-4 ">
                    <label for="id" class="form-label">l'Identifiant de la question à modifier
                   <input type="text" id="id" name="id" value="{{$onequestion ? $onequestion->id :''}}"  placeholder="l'identifiant de la question"></label>
                </div>

                <!---->

                <div class="form-group">
                    <label for="title" class=" ml-1 my-2 input-label">Titre de la question </label><input class="form-control" id="title" type="text" name="title" value="{{$onequestion ? $onequestion->tilte :''}}" placeholder="EX: Glucides : les oses">
                </div>
                <!---->
              

                    <div class="col-md-4 ">
                        <label for="nbre" class="form-label">Nombre de proposition juste:</label>
                        <input class="form-control" value="{{$onequestion ? $onequestion->good_answers :''}}" name="good_answers" id="nbre" required>
        
                    </div>
               
                <!---->

                    <div class="col-md-4 ">

                    <div class="col-md-4 ">
                    <label for="id" class="form-label">L'identifiant du du parent
                   <input type="number" class="" id="id" value="{{$onequestion ? $onequestion->sujet_id :''}}" name="sujet_id" placeholder="l'Identifiant de la du parent"></label>
                </div>

                    </div>
                <!---->

                    <div class="col-md-4">

                 <label for="type" class="form-label">Type de question </label>
                        <select class="form-select" name="type" id="type" required>
                            <option value="QCM">QCM</option>
                            <option value="QCD">QCD</option>

                        </select>

                    </div>
                <!---->

                    <div class="col-md-4 ">

                <label for="nature" class="form-label"> Nature de la question bonne(1) ou mauvaise (0) reponse (QCM)- (0) si la question est fausse (1) si la question est juste (QCD) </label>
                <input  class="form-control" value="{{$onequestion ? $onequestion->point :''}}" name="point" id="nature" required>
                </div>


                <div  class="my-2">
                <label for="img">Image de la question  <input type="file" id="img" name="file" > </label>
                </div>



                <div>
            <button type="submit" class="m-2 btn btn-outline-success"> Modifier cette question</button>
    
             </div>
             </form>
        </div>
  <!--Propositions-->
  <livewire:update-propos/>


            <div class="mt-2">
            <h3>Propositions</h3>
     <form class="form row" method="POST" action="{{route('update',['action'=>'update_propos'])}}">
            @csrf
            <div class="col-md-4 ">
                    <label for="id" class="form-label">l'Identifiant de la proposition à modifier
                   <input type="text" id="id" name="id" value="{{$onepropo ? $onepropo->id : ''}}" placeholder="l'identifiant de la propositions"></label>
                </div>
              
                <div class="form-group">
                    <label for="p" class=" ml-1  input-label">Propositions </label><textarea style="height: 200px;" class="form-control" id="p" type="text" value="" name="propos">{{$onepropo ? $onepropo->propos:''}}</textarea>
                </div>
                <!---->
              
                    <div class="col-md-5 ">
                    <label for="nbre" class="form-label">Nombre de point 1 pour bonne reponse 0 pour mauvause reponse:</label>
                   <input type="number" id="nbre" name="point" value="{{$onepropo ? $onepropo->point : '' }}">
                    </div>

                    <div class="col-md-5 ">

                    <div class="col-md-4 ">
                    <label for="id" class="form-label">l'Identifiant du parent
                   <input type="text" id="id" name="question_id" value ="{{$onepropo ? $onepropo->question_id :''}}" placeholder="l'identifiant du parent"></label>
                </div>
                    </div>
                  
                                 
                     <div>   <button type="submit" class="m-2 btn btn-outline-success">Modifier cette proposition</button></div>
            </form>

            </div>
        </div>
        