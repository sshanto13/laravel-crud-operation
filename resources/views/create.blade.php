@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('crud.index') }}" class="btn btn-primary m-b-10">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data" class="form m-t-10">

 @csrf
 <div class="form-group row">
  <label class="col-md-4 text-right">Enter First Name</label>
  <div class="col-md-8">
   <input type="text" name="first_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group row">
  <label class="col-md-4 text-right">Enter Last Name</label>
  <div class="col-md-8">
   <input type="text" name="last_name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group row">
  <label class="col-md-4 text-right">Select Profile Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="float-right">
 <div class="form-group row">

  <div class="float-right">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
</div>
 </div>

</form>

@endsection