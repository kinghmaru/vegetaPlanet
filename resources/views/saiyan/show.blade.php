@extends('layouts.app')
@section('content')
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3>Detalhes do Saiyajin</h3>
				<hr>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<b>Nome: </b> {{ $saiyan->name}}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<b>Classe: </b> {{ $saiyan->class}}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<b>Poder de Luta: </b> {{ $saiyan->powerLevel}}
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<b>Descrição: </b> {{ $saiyan->description}}
				</div>
			</div>

			<div class="col-md-12">
				<a href="{{ route('saiyan.index') }}" class="btn btn-sm btn-success">Voltar</a>
			</div>

		</div>

	</div>

@endsection