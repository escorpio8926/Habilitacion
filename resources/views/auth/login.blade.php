@extends('layouts.main')
@section('titulo')
Admin Proyectos - Iniciar Sesión
@endsection
@section('main')
<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Iniciar Sesión</h3>
			</div>
			<div class="panel-body">
				<form class='form-horizontal' action="login" method="post">
					{!! csrf_field() !!}
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-user fa-btn"></i>
						</span>
						<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" placeholder="Usuario ..." >
					</div>
					<div class="input-group">
						<span class="input-group-addon">
							<i class="fa fa-key fa-btn"></i>
						</span>
						<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña ..." >
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember">
							Recordar
						</label>
					</div>
					<div class="row">
						&nbsp;
					</div>
					<button type="submit" class="btn btn-primary btn-block">Iniciar Sesión&nbsp;<i class='fa fa-sign-in fa-btn'></i></button>
					{{-- <a href="{{url('auth/register')}}" class="btn btn-primary btn-block">Registrarse</a> --}}
				</form>
			</div>
		</div>
	</div>
</div><!-- row -->
@endsection
