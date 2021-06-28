<h3>Mise à jour</h3>
<div class="container p-3 ">

         <!--Sujet-->

         <div>
         <h4>Sujet</h4>
        <form class="form row" method="post" action="{{route('update',['action' => 'update_sujet'])}}">
            @csrf

            <div class="col-md-4 ">
                    <label for="id" class="form-label">Sujet à modifier</label>
                    <select class="form-select shadow" name="id" id="id" required>
                        <option value="">choisir...</option>
                        @foreach($sujets as $sujet)
                        <option value="{{$sujet->id}}">{{$sujet->title}} ({{$sujet->nivau}}) -> {{$sujet->ue}}</option>
                       @endforeach

                    </select>
                </div>

            <div class="form-group">
                <label for="title" class=" ml-1 input-label">Titre</label><input class="form-control" id="title" type="text" require name="title"  placeholder="EX: Glucide :les oses">
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
        <div class="mt-2">
              
   
                <h3>Question</h3>

      <form class="form row" method="POST" action="{{route('update',['action'=>'update_question'])}}">
            @csrf
                <!---->

            <div class="col-md-4 ">
                    <label for="id" class="form-label">Question à modifier</label>
                    <select class="form-select shadow" name="id" id="id" required>
                        <option value="">choisir...</option>
                        @foreach($questions as $q)
                        <option value="{{$q->id}}">{{$q->tilte}} : bonne reponse: {{$q->good_answers}} ({{$q->type}}) -> {{$q->sujet->title}} ({{$q->sujet->ue}})</option>
                       @endforeach

                    </select>
            </div>

                <!---->

                <div class="form-group">
                    <label for="title" class=" ml-1 my-2 input-label">Titre de la question </label><input class="form-control" id="title" type="text" name="title" placeholder="EX: Glucides : les oses">
                </div>
                <!---->
              

                    <div class="col-md-4 ">
                        <label for="nbre" class="form-label">Nombre de proposition juste:</label>
                        <select class="form-select" name="good_answers" id="nbre" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>

                        </select>
                    </div>
               
                <!---->

                    <div class="col-md-4 ">

                        <label for="sujet" class="form-label">Cette question a pour parent</label>
                        <select class="form-select" name="sujet_id" id="sujet" required>
                        @foreach($sujets as $sujet )
                        <option value="{{$sujet->id}}">{{$sujet->title}} : {{$sujet->ue}} : {{strtoupper($sujet->nivau)}} </option>
                           @endforeach

                        </select>

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
                <select class="form-select" name="point" id="nature" required>
                    <option value="0">0</option>
                    <option value="1">1</option>

                </select>

                </div>



                <div>
            <button type="submit" class="m-2 btn btn-outline-success"> Modifier cette question</button>
    
             </div>
             </form>
        </div>
  <!--Propositions-->
            <div class="mt-2">
            <h3>Propositions</h3>
     <form class="form row" method="POST" action="{{route('update',['action'=>'update_propos'])}}">
            @csrf
            <div class="col-md-4 ">
                    <label for="id" class="form-label">Proposition à modifier</label>
                    <select class="form-select  shadow" name="id" id="id" required>
                        <option value="">choisir...</option>
                        @foreach($propos as $p)
                        <option value="{{$p->id}}">{{$p->propos}} : bonne reponse: {{$p->point ? 'oui' : 'non'}} -> {{$p->question->tilte}})</option>
                       @endforeach

                    </select>
            </div>
              
                <div class="form-group">
                    <label for="p" class=" ml-1  input-label">Propositions </label><input class="form-control" id="p" type="text" name="propos" placeholder="EX: Glucides : les oses">
                </div>
                <!---->
              
                    <div class="col-md-5 ">
                        <label for="nbre" class="form-label">Nombre de point 1 pour bonne reponse 0 pour mauvause reponse:</label>
                        <select class="form-select" name="point" id="nbre" required>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            
                        </select>
                    </div>

                    <div class="col-md-5 ">

                        <label for="q" class="form-label">Cette question a pour parent</label>
                        <select class="form-select" name="question_id" id="q" required>
                            <option value="">selectionner la question qui correspond</option>
                            @foreach($questions as $q)
                            <option class="" value="{{$q->id}}">{{$q->tilte}} (du sujet {{$q->sujet->tilte}} qui a {{$q->good_answers}} {{$q->good_answsers >0 ? 'reponses justes':'reponse juste'}})</option>
                            @endforeach
                        </select>

                    </div>
                  
                                 
                     <div>   <button type="submit" class="m-2 btn btn-outline-success">Modifier cette proposition</button></div>
            </form>

            </div>
        </div>
        