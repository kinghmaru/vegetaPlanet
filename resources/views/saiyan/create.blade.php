@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Novo Saiyajin</h3>
			</div>
		</div>

	@if($errors->any())

		<div class="alert alert-danger">
			<b>Opa! Existe algum problema na sua submissão!</b>
			<ul>
				@foreach($errors as $error)
					<li>{{ $errors }}</li>
				@endforeach
			</ul>
			
		</div>
	@endif

	<form action="{{ route('saiyan.store') }}" method="POST">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<b>Nome: </b>
				<input type="text" name="name" class="form-control" placeholder="Nome">
			</div>

			<div class="col-md-12">
				<b>Classe: </b>
				<input type="text" name="class" class="form-control" placeholder="Classe">
			</div>

			<div class="col-md-12">
				<b>Poder de Luta: </b>
				<input type="number" name="powerLevel" class="form-control" placeholder="Poder de Luta">
			</div>

			<div class="col-md-12">
				<b>Descrição: </b>
				<textarea class="form-control" placeholder="Descrição" name="description" rows="8" cols="80"></textarea>
			</div>

			<div class="col-md-12">
				<a href=" {{ route('saiyan.index') }}" class="btn btn-sm btn-success">Voltar</a>
				<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
			</div>

		</div>
		

	</form>


	</div>

	@endsection