@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete= "address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="col-md-6">
                                  <label for="text" class="form-label">CPF</label>
                                  <input type="text" class="form-control" id="cpf" name="cpf">
                                </div>
                                <div class="col-md-6">
                                  <label for="inputPassword4" class="form-label">Telefone</label>
                                  <input type="text" class="form-control" id="phone" name="phone">
                                </div>

<select class="row mb-0" name="type">
  <option value="manager">Gerente</option>
  <option value="employee">Funcionários</option>
</select>

                        <!-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end dropdown">
                                  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Opções
                                  </button> -->
                                  <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Login</a></li>
                                  <li><a class="dropdown-item" href="#">Logout</a></li>
                                  <li><a class="dropdown-item" href="#">Home</a></li>
                                  </ul>
                                  </div>
                                    </div>
                                    </div>
                                    </nav>
                                      <div class="container">
                                        <h1 style="margin-top: 30px;">Dados da Empresa</h1>

                                        <form class="row g-3">
                                          <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">CNPJ</label>
                                            <input type="text" class="form-control" id="inputText" name="cnpj">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Razão Social</label>
                                            <input type="text" class="form-control" id="inputPhone" name="company_name">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Endereço</label>
                                            <input type="email" class="form-control" id="inputText" name="company_address">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Nome Fantasia</label>
                                            <input type="text" class="form-control" id="inputText" name="trading_name">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Gerente</label>
                                            <input type="text" class="form-control" id="inputEmail1">
                                          </div>
                                          <div class="col-md-6">
                                            <label for="inputPassword4" class="form-label">Telefone</label>
                                            <input type="text" class="form-control" id="inputPassword1" name="company_phone">
                                          </div>



                                          <div class="col-12">

                                    <button type="submit" class="btn btn-primary" name="button">Cadastrar</button>
                                    </div>
                                    </div>
                                          </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
