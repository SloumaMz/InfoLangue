@extends('layouts.app')

@section('content')

<div class="div col-md-8 col-md-offset-2">
  <div class="panel panel-primary">


    <form action="{{url('/formation')}}" method='POST'>
      {{csrf_field()}}
  <div class="form-group">
    <label for="text">Titre</label>
    <input type="text" class="form-control" name="titre" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input type="text" class="form-control" name='description' placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form> 


  </div>
  
</div>


@endsection