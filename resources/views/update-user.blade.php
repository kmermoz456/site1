<div class="container my-5 p-5 bg-white rounded shadow-sm">
 <h3>Modification de vos  données </h3>
<div class="row">
@if ($errors->any())
    <div>
        <div class="text-danger">
            {{ __('Whoops! Des erreurs.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


</div>

<form class="row g-3 needs-validation"  method="post" action="{{route('updateuser')}}">
@csrf
 <!--name -->
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nom & Prenoms <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="validationCustom01" name="name" value="{{Auth::user()->name}}" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
 <!--email -->
  
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email <span class="text-danger">*</span></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" class="form-control" value="{{Auth::user()->email}}" id="validationCustomUsername" name="email" aria-describedby="inputGroupPrepend" required>
      
    </div>
  </div>
 <!--phone -->

  <div class="col-md-3">
  <label for="validationCustomUsername" class="form-label">Telephone <span class="text-danger">*</span></label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend"><ion-icon name="call-outline"></ion-icon> &nbsp; +225 </span>
      <input type="text" maxlength="10" class="form-control" value="{{Auth::user()->numero}}" name="numero" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      
    </div>
  </div>

 <!--city -->

  <div class="col-md-6">
    <label for="city" class="form-label">Commune de résidence <span class="text-danger">*</span></label>
    <input type="text" class="form-control" value="{{Auth::user()->city}}" name ="city" id="city" required>
    
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Nivau <span class="text-danger">*</span> </label>
    <select class="form-select" name="nivau" id="validationCustom04" required>
      <option selected  value="sn1">Licence 1 (SN1)</option>
      <option   value="sn2">Licence 2 (SN2)</option>
      <option>Autre</option>
    </select>
   
  </div>
         <button type="submit" class="btn btn-dark" >Modifier</button>
</form>

</div>