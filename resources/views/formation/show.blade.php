@extends('layouts.app')

@section('content')


<div class="div col-md-12 col-md-offset-2">
  <div class="row">
    <div class="col-md-8">
     
      <table class="table">
      
      <thead>
        <tr>
            <th> Titre</th>
            <th> Description </th>
            <th> Créé le </th>
            <th> Modifié le </th>
        </tr>
      </thead>
      
      <tbody>
        <tr>
            <td> {{$fff->nom}}</td>
            <td> {{$fff->description}}</td>
            <td> {{$fff->created_at}}</td>
            <td> {{$fff->updated_at}}</td>         
        </tr>
      </tbody>
      
      </table>
  
    </div>
  </div>
</div>


@endsection