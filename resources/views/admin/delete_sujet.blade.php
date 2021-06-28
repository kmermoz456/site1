<div class="container">

<div class="dropdown mb-3">
  <button class="btn btn-danger px1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Je veux supprimer des 
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="?action=sujets">Sujets</a></li>
    <li><a class="dropdown-item" href="?action=questions">Questions</a></li>
    <li><a class="dropdown-item" href="?action=propositions">Propositions</a></li>
  </ul>
</div>
    @if(isset($_GET['action']))

    @if($_GET['action'] === "sujets" )  
 <h2>Sujets</h2>

       <livewire:delete-sujet/>

        @elseif($_GET['action'] === "questions" ) 
 <h2>Questions</h2>

        <livewire:delete-question/>

        @elseif($_GET['action'] === "propositions" ) 
        <h2>Propositions</h2>

        <livewire:delete-proposition/>


    @endif

    @endif
    
</div>