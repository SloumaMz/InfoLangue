@extends('layouts.app')

@section('content')


<div class="div col-md-12 col-md-offset-2">
	<div class="row">
		<div class="col-md-8">
			<a href="{{url('/formation/create')}}" type="submit" class="btn btn-primary col-md-offset-11">Ajouter</a>
			<table class="table">
			<thead>
				<tr>
				<th> Titre</th>
				<th> Description </th>
				<th> Créé le </th>
				<th> Modifier le </th>
				<th> Action </th>
			</tr>
			</thead>
			<tbody>
				@foreach($slim as $f)
				<tr>
					<td> {{$f->nom}}</td>
					<td> {{$f->description}}</td>
					<td> {{$f->created_at}}</td>
					<td> {{$f->updated_at}}</td>
					<td>
						<a href="{{url('/formation/create')}}" type="submit" class="btn btn-primary col-md-offset-11">Consulter</a>
						<a href="{{url('/formation/create')}}" type="submit" class="btn btn-success col-md-offset-11">Modifier</a>
						<a href="{{url('/formation/create')}}" type="submit" class="btn btn-danger col-md-offset-11">Supprimer</a>

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