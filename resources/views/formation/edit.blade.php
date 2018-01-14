@extends('layouts.app')

@section('content')

<div class="container table-responsive">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">

                  <div class="panel-body">
                    
                    <div>
                    <form action="{{url('/formation/'.$abc->id)}}" method='POST'>
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                    <div class="form-group @if($errors->get('nom')) has-error @endif">
                      <label for="text">Titre</label>
                      <input {
                      value="{{$abc->nom}}" type="text" class="form-control" name="nom">
                      @if($errors->get('nom'))
                        @foreach($errors->get('nom') as $msg)
                          <li>{{$msg}}</li>
                        @endforeach
                      @endif
                    </div>
                 

                    <div class="form-group">
                      <label for="exampleInputPassword1">description</label>
                      <input value="{{$abc->description}}" type="text" class="form-control" name='description'>
                       @if($errors->get('description'))
                          @foreach($errors->get('description') as $msg)
                             <li>{{$msg}}</li>
                          @endforeach
                       @endif
                    </div>
                     
                      <button type="submit" class="btn btn-primary">Submit</button>
                      </form> 
                   
                    </div>  
                  
                  </div>
          </div>
        </div>
    </div>
</div>

@endsection