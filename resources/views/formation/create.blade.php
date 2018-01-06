@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
			<thead>
				<tr>
				<th> Titre</th>
				<th> Description </th>
				<th> Créé le </th>
				<th> Modifier le </th>
			</tr>
			</thead>
			<tbody>
				@foreach($slim as $f)
				<tr>
					<td> {{$f->nom}}</td>
					<td> {{$f->description}}</td>
					<td> {{$f->created_at}}</td>
					<td> {{$f->updated_at}}</td>
				</tr>
				@endforeach
			</tbody>
			
			</table>
		</div>
	</div>
</div>


@endsection