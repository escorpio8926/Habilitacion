@extends('layouts.main')
@section('main')
<div class="page-header">
	<h1><i class="fa fa-plus"></i> Proyectos / Nuevo </h1>
</div>
@include('common.error')
<div class="row">
	<div class="col-md-12">
		<form action="{{ route('proyectos.store') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group @if($errors->has('titulo')) has-error @endif">
				<label for="titulo-field">Titulo</label>
				<input type="text" id="titulo-field" name="titulo" class="form-control" value="{{ old("titulo") }}"/>
				@if($errors->has("titulo"))
				<span class="help-block">{{ $errors->first("titulo") }}</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('descripcion')) has-error @endif">
				<label for="descripcion-field">Descripcion</label>
				<textarea class="form-control" id="descripcion-field" rows="3" name="descripcion">{{ old("descripcion") }}</textarea>
				@if($errors->has("descripcion"))
				<span class="help-block">{{ $errors->first("descripcion") }}</span>
				@endif
			</div>
			<div class="well well-sm">
				<button type="submit" class="btn btn-primary">Crear</button>
				<a class="btn btn-link pull-right" href="{{ route('proyectos.index') }}"><i class="fa fa-backward"></i>Atras</a>
			</div>
		</form>

	</div>
</div>
@endsection
