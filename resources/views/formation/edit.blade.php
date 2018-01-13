@extends('layouts.app')

@section('content')

<div class="div col-md-8 col-md-offset-2">
  <div>


    <form action="{{url('/formation/'.$abc->id)}}" method='POST'>
      <input type="hidden" name="_method" value="PUT">
      {{csrf_field()}}
  <div class="form-group">
    <label for="text">Titre</label>
    <input {
    value="{{$abc->nom}}" type="text" class="form-control" name="titre" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">description</label>
    <input value="{{$abc->description}}" ype="text" class="form-control" name='description' placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
    </form> 

  </div>
  
</div>


@endsection