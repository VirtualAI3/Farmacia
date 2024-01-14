@extends ('layouts.app')

@section('title','Registro')

@section('content')

<div class="header bg-gradient-primary py-7 py-lg-8">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">Registro!</h1>
                    <p class="text-lead text-light">Si no tienes una cuenta ingresa tus datos para registrarte.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>
<div class="container mt--8 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card bg-secondary shadow border-0">
                <div class="card-body px-lg-5 py-lg-5">
                    <form role="form" method="POST" action="">
                        @csrf

                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                </div>
                                <input class="form-control" placeholder="Nombres" type="nombres" name="nombres" id="nombres">
                            </div>
                            @error('nombres')
                            <div class="alert alert-warning my-3" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                </div>
                                <input class="form-control" placeholder="Apellidos" type="apellidos" name="apellidos" id="apellidos">
                            </div>
                            @error('apellidos')
                            <div class="alert alert-warning my-3" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input class="form-control" placeholder="Email" type="email" name="email" id="email">
                            </div>
                            @error('email')
                            <div class="alert alert-warning my-3" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Contraseña" type="password" name="password" id="password">
                            </div>
                            @error('password')
                            <div class="alert alert-warning my-3" role="alert">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>
                                <input class="form-control" placeholder="Repite contraseña" type="password" name="password_confirmation" id="password_confirmation">
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin">
                                <span class="text-muted">Remember me</span>
                            </label>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary my-4">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <a href="#" class="text-light"><small>Forgot password?</small></a>
                </div>
                <div class="col-6 text-right">
                    <a href="#" class="text-light"><small>Create new account</small></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection