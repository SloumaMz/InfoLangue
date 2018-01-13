@extends('layouts.app')

@section('content')


<div class="div col-md-12 col-md-offset-2">
	<div class="row">
		<div class="col-md-8">
			<a href="{{url('/formation/create')}}" type="submit" class="btn btn-primary col-md-offset-8">Ajouter</a>
			<table class="table">
			<thead>
				<tr>
				<th> Titre</th>
				<th> Description </th>
				<th> Action </th>
			</tr>
			</thead>
			<tbody>
				@foreach($slim as $f)
				<tr>
					<td> {{$f->nom}}</td>
					<td> {{$f->description}}</td>
					<td>
						
						<form action="{{url('/formation/'.$f->id)}}" method="POST">
							{{csrf_field()}}
							{{ method_field('DELETE') }}
						<a href="{{url('/formation/'.$f->id.'/show')}}"  class="btn btn-primary">Consulter</a>
						<a href="{{url('/formation/'.$f->id.'/edit')}}"  class="btn btn-success">Modifier</a>
						<button type="submit" class="btn btn-danger">supprimer</button>
						</form>
						
					</td> 
				</tr>
				@endforeach
			</tbody>
			
			</table>
		</div>
	</div>
	{{$slim->links()}}
</div>


@endsection