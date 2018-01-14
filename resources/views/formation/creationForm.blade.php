
@extends('layouts.app') 

@section('content')

<div class="container table-responsive">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">

                
                  <div class="panel-heading">Ajouter formation </div> 
                    <div class="class pull-right">
                      <a href="{{url('/formation')}}" class="btn btn-danger">x</a>
                    </div>
                
               
                    <div class="panel-body">
                        <form action="{{url('/formation')}}" class="form-horizontal" method="POST">
                            {{csrf_field()}}
                            <div class="form-group  @if($errors->get('nom')) has-error @endif ">
                                <label for="nom" class="col-md-2 control-label">Titre</label>
                                    <div class="col-md-8"> 
                                        <input type="text"  name="nom" role="form" class="form-control" value="{{old('nom')}}" required autofocus>
                                    @if($errors->get('nom'))
                                        @foreach($errors->get('nom') as $msg)
                                                <li>{{$msg}}</li>
                                        @endforeach
                                    @endif
                                    </div>
                             </div>
                             <div class="form-group ">
                                <label for="description" class="col-md-2 control-label">Description</label>
                                    <div class="col-md-8 "> 
                                        <input type="text"  name="description" role="form" class="form-control" value="{{old('description')}}" required autofocus>
                                    @if($errors->get('description'))
                                    @foreach($errors->get('description') as $msg)
                                    <li>{{$msg}}</li>
                                    @endforeach
                                    @endif
                                    </div>                                   
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-8">
                                    <button type="submit" class="btn btn-primary" value="Valider">Valider</button>
                                </div>            
                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
      


@endsection('content')