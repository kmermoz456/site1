<div class="container p-3 ">

    <div class="row">
         <!--Sujet-->
         <h3>Sujet</h3>
         @if(isset($message)) <div class="alert alert-success">{{$message}}</div> @endif
        <form class="form" method="post" action="{{route('add_sujet')}}">
            @csrf

            <div class="form-group">
                <label for="title" class=" ml-1 input-label">Titre</label><input class="form-control" id="title" type="text" name="title"  placeholder="EX: Les oses sont des monosaccharide">
            </div>
            <div class="my-3">
            </div>
               

            <div class="row">
                <div class="col-md-4 ">
                    <label for="nivau" class="form-label">Nivau:</label>
                    <select class="form-select" name="nivau" id="nivau" wire:model="nivau" required>
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
            </div>
            
            <button type="submit" class=" m-1 btn btn-outline-success">Ajouter un sujet </button>
        </form>
            </div>

        
            <div class="row mt-2">
                <!--Questions-->
   
                <h3>Question</h3>

                <form class="form" method="POST" action="{{route('add_quest')}}">
            @csrf

                <div class="form-group">
                    <label for="title" class=" ml-1 input-label">Titre du sujet </label><input class="form-control" id="title" type="text" name="title" placeholder="EX: Glucides : les oses">
                </div>
                <div class="my-3">
                </div>
                <div class="row">
                    <div class="col-md-5 ">
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
                    <div class="col-md-5 ">

                        <label for="sujet" class="form-label">Cette question a pour parent</label>
                        <select class="form-select" name="sujet_id" id="sujet" required>
                        @foreach($sujets as $sujet )
                        <option value="{{$sujet->id}}">{{$sujet->title}} : {{$sujet->ue}} : {{strtoupper($sujet->nivau)}} </option>
                           @endforeach

                        </select>

                    </div>
                    <div class="col-md-5 ">

                 <label for="type" class="form-label">Type de question </label>
                        <select class="form-select" name="type" id="type" required>
                            <option value="QCM">QCM</option>
                            <option value="QCD">QCD</option>

                        </select>

                    </div>

                    <div class="col-md-5 ">

                <label for="nature" class="form-label"> Nature de la question bonne(1) ou mauvaise (0) reponse </label>
                <select class="form-select" name="point" id="nature" required>
                    <option value="0">0</option>
                    <option value="1">1</option>

                </select>

                </div>





                </div>
 <button type="submit" class="m-2 btn btn-outline-success"> Ajouter une question</button>

                </form>
            </div>

            <div class="row mt-2">
            <form class="form" method="POST" action="{{route('prop')}}">
            @csrf
                <!--Propositions-->

                <h3>Propositions</h3>

                <div class="form-group">
                    <label for="p" class=" ml-1 input-label">Propositions </label><input class="form-control" id="p" type="text" name="propos" placeholder="EX: Glucides : les oses">
                </div>
                <div class="my-3">
                </div>
                <div class="row">
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
                  
                </div>

            </div>
    </div>
 <button type="submit" class="m-2 btn btn-outline-success">Ajouter une propositions</button>
    </form>

    
</div>


</div>