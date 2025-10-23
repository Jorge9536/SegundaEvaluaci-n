@extends('adminlte::page')

@section('title', 'Login - Evaluación 2')

@section('content_header')
    <h1 class="text-center">Iniciar Sesión</h1>
    <p class="text-center">Sistema de Evaluación - Laravel + AdminLTE 3</p>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Ingrese sus credenciales</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    
                    <!-- Campo Usuario -->
                    <div class="form-group">
                        <label for="usuario">Usuario:</label>
                        <div class="input-group">
                            <input type="text" name="usuario" id="usuario" 
                                   class="form-control @error('usuario') is-invalid @enderror" 
                                   placeholder="Ingrese su usuario" 
                                   value="{{ old('usuario') }}">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                        @error('usuario')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <!-- Campo Contraseña -->
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   placeholder="Ingrese su contraseña">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <!-- Botón Submit -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                        </button>
                    </div>
                </form>
                
                <!-- Credenciales de prueba -->
                <div class="alert alert-info mt-3">
                    <strong>Credenciales para prueba:</strong><br>
                    Usuario: <code>admin</code><br>
                    Contraseña: <code>admin123</code>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <style>
        .card-primary {
            border-top: 3px solid #007bff;
        }
        .login-page {
            background: #f4f6f9;
        }
    </style>
@stop