@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Editar Saiyajin</h3>
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

	<form action="{{ route('saiyan.update', $saiyan->id) }}" method="POST">
		@csrf
		@method('PUT')
		<div class="row">
			<div class="col-md-12">
				<b>Nome: </b>
				<input type="text" name="name" class="form-control" value=" {{ $saiyan->name }}" >
			</div>

			<div class="col-md-12">
				<b>Classe: </b>
				<input type="text" name="class" class="form-control" value=" {{ $saiyan->class }}">
			</div>

			<div class="col-md-12">
				<b>Poder de Luta: </b>
				<input type="text" name="powerLevel" class="form-control" value=" {{ $saiyan->powerLevel }}">
			</div>

			<div class="col-md-12">
				<b>Descrição: </b>
				<textarea class="form-control" name="description" rows="8" cols="80">{{ $saiyan->description }}</textarea>
			</div>

			<div class="col-md-12">
				<a href=" {{ route('saiyan.index') }}" class="btn btn-sm btn-success">Voltar</a>
				<button type="submit" class="btn btn-sm btn-primary">Enviar</button>
			</div>

		</div>
		

	</form>


	</div>

	@endsection