@extends('layouts.login')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="font-weight-light my-3">Login</h3>
                </div>
                <div class="card-body p-4">
                    <x-alert />

                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="Digite o e-mail de usuário" value="{{ old('email') }}" required>
                            <label for="email">E-mail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="password"
                                   placeholder="Digite a senha" required>
                            <label for="password">Senha</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="{{ route('forgot-password.show') }}" class="small text-decoration-none">Esqueceu a senha?</a>
                            <button type="submit" class="btn btn-primary px-4">Acessar</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center bg-light py-3">
                    <div class="small">
                        Precisa de uma conta?
                        <a href="{{ route('login.create-user') }}" class="text-decoration-none">Inscrever-se!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
