@extends('layouts.main')
@section('titulo')
Admin Proyectos - Registrarse
@endsection
@section('main')
@include('common.error')
<div class="row well well-lg">
	<form action="" method="POST" class="form-horizontal" role="form">
				<div class="form-group">
					<legend>Registrarse</legend>
				</div>
				{!! csrf_field() !!}
				<div class="form-group">
						<label for="name" class="col-sm-3 control-label">Nombre</label>
						<div class="col-sm-9">
							<input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
							<small class="text-danger">{{ $errors->first('name') }}</small>
						</div>
				</div>
				<div class="form-group">
						<label for="email" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
							<small class="text-danger">{{ $errors->first('email') }}</small>
						</div>
				</div>

				<div class="form-group">
						<label for="password" class="col-sm-3 control-label">Contraseña</label>
						<div class="col-sm-9">
							<input class="form-control" type="password" name="password" id="password">
							<small class="text-danger">{{ $errors->first('password') }}</small>
						</div>
				</div>

				<div class="form-group">
						<label for="password_confirmation" class="col-sm-3 control-label">Confirmar Contraseña</label>
						<div class="col-sm-9">
							<input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
							<small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
						</div>
				</div>
				<div class="row">
					&nbsp;
				</div>
				<button type="submit" class="btn btn-primary btn-block">Registrar</button>
		</form>
</div>
@endsection
