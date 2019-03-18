@extends('layouts.app')
@section('content')

	<div id="modal" align="center">
        <h2>Bem-vindos ao Planeta Vegeta!</h2>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h3>Lista de Saiyajins</h3>
			</div>
			<div class="col-sm-2">
				<a class="btn btn-sm btn-success" href="{{ route('saiyan.create') }}">Criar novo Saiyajin</a>
		</div>

		@if($message = Session::get('success'))
			<div class="alert alert-success">
				<p> {{$message}} </p>
			</div>
		@endif

		<table class="table table-hover table-sm">
			<tr>
				<th width="50px"><b>Nome</b></th>
				<th width="50px"><b>Classe</b></th>
				<th width="90px"><b>Poder de Luta</b></th>
				<th width="300px"><b>Descrição</b></th>
				<th width="180px">Ação</th>
			</tr>

			@foreach($saiyans as $saiyan)
				<tr>
					<td>{{$saiyan->name}}</td>
					<td>{{$saiyan->class}}</td>
					<td>{{$saiyan->powerLevel}}</td>
					<td>{{$saiyan->description}}</td>
					<td>
						<form action="{{ route('saiyan.destroy', $saiyan->id) }}" method="POST">
							
							<a class="btn btn-sm btn-success" href="{{ route('saiyan.show', $saiyan->id) }}">Mostrar</a>

							<a class="btn btn-sm btn-warning" href="{{ route('saiyan.edit', $saiyan->id) }}">Editar</a>

							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-sm btn-danger">Excluir</button>
						</form>
					</td>

				</tr>
			@endforeach
			
		</table>

		{!! $saiyans->links() !!}


	</div>

@endsection