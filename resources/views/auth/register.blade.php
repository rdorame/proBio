@extends('layouts.main')

@section('content')
<div class="container">
    <div class="container">
      <div class="login">
        <h1 class="login-heading">
          <strong>Registro</strong></h1>
          <form method="post">
            <input type="text" name="user" placeholder="Nombre" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Apellido" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Correo electrónico" required="required" class="input-txt" />
            <input type="password" name="password" placeholder="Contraseña" required="required" class="input-txt" />
            <input type="password" name="password" placeholder="Repite la contraseña" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Ciudad" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Estado" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Teléfono" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Edad" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Género" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="¿Cuenta con jardín?" required="required" class="input-txt" />
            <input type="text" name="user" placeholder="Experiencia en cultivos" required="required" class="input-txt" />

            <div class="login-footer">
                <a href="#" class="lnk">
                ¿Ya tienes una cuenta?
                </a>
                <button type="submit" class="btn btn--right">Sign in  </button>

              </div>
          </form>
      </div>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
