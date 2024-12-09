@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <div class="mb-1 hstack gap-2">
            <h2 class="mt-3">Usuário</h2>
            <ol class="breadcrumb mb-3 mt-3 ms-auto">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}" class="text-decoration-none">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Usuários</li>
            </ol>
        </div>

        <div class="card mb-4 border-primary shadow">
            <div class="card-header">
                <span>Pesquisar</span>
            </div>

            <div class="card-body">
                <form action="{{ route('user.index') }}">
                    <div class="row mb-3">

                        <div class="col-md-4 col-sm-12">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $name }}" placeholder="Nome do usuário">
                        </div>


                        <div class="col-md-4 col-sm-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="text" name="email" class="form-control" id="email"
                                value="{{ $email }}" placeholder="E-mail do usuário">
                        </div>

                    </div>

                    <div class="row mb-3">

                        <div class="col-md-4 col-sm-12">
                            <label for="start_date_registration" class="form-label">Data Cadastro Início</label>
                            <input type="datetime-local" name="start_date_registration" class="form-control"
                                id="start_date_registration" value="{{ $start_date_registration }}">
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <label for="end_date_registration" class="form-label">Data Cadastro Fim</label>
                            <input type="datetime-local" name="end_date_registration" class="form-control"
                                id="end_date_registration" value="{{ $end_date_registration }}">
                        </div>

                        <div class="col-md-4 col-sm-12 mt-4 pt-3">

                            <button type="submit" class="btn btn-info btn-sm"><i class="fa-solid fa-magnifying-glass"></i>
                                Pesquisar</button>

                            <a href="{{ route('user.index') }}" class="btn btn-danger btn-sm"><i
                                    class="fa-solid fa-trash"></i> Limpar</a>

                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="card mb-4 border-primary shadow">
            <div class="card-header hstack gap-2">
                <span>Listar</span>
                <span class="ms-auto">

                    @can('create-user')
                        <a href="{{ route('user.create') }}" class="btn btn-success btn-sm"><i
                                class="fa-regular fa-square-plus"></i> Cadastrar</a>
                    @endcan

                    {{-- <a href="{{ route('user.generate-pdf')}}" class="btn btn-warning btn-sm"><i class="fa-regular fa-file-pdf"></i> Gerar PDF</a> --}}

                    @can('generate-pdf-user')
                        <a href="{{ url('generate-pdf-user?' . request()->getQueryString()) }}"
                            class="btn btn-warning btn-sm"><i class="fa-regular fa-file-pdf"></i> Gerar PDF</a>
                    @endcan

                    @can('generate-csv-user')
                        <a href="{{ url('generate-csv-user?' . request()->getQueryString()) }}"
                            class="btn btn-success btn-sm"><i class="fa-regular fa-file-excel"></i> Gerar Excel</a>
                    @endcan

                </span>
            </div>
            <div class="card-body">

                <x-alert />

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th class="d-none d-md-table-cell">E-mail</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td class="d-none d-md-table-cell">{{ $user->email }}</td>
                                <td class="d-md-flex flex-row justify-content-center">

                                    @can('show-user')
                                        <a href="{{ route('user.show', ['user' => $user->id]) }}"
                                            class="btn btn-primary btn-sm me-1 mb-1">
                                            <i class="fa-regular fa-eye" title="Visualizar"></i>
                                        </a>
                                    @endcan

                                    @can('edit-user')
                                        <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                            class="btn btn-warning btn-sm me-1 mb-1">
                                            <i class="fa-solid fa-pen-to-square" title="Editar"></i>
                                        </a>
                                    @endcan

                                    @can('destroy-user')
                                            <!-- Botão para abrir o modal -->
                                            <button type="button" class="btn btn-danger btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#deleteUserModal{{ $user->id }}" title="Apagar">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="deleteUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="deleteUserModalLabel{{ $user->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <!-- Cabeçalho do Modal -->
                                                        <div class="modal-header bg-danger text-white">
                                                            <h5 class="modal-title" id="deleteUserModalLabel{{ $user->id }}">Confirmar Exclusão</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                                                        </div>

                                                        <!-- Corpo do Modal -->
                                                        <div class="modal-body">
                                                            <p>Tem certeza de que deseja excluir o usuário <strong>{{ $user->name }}</strong>? Esta ação é irreversível.</p>
                                                        </div>

                                                        <!-- Rodapé do Modal -->
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                            <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-danger">Confirmar Exclusão</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endcan

                                </td>
                            </tr>
                        @empty
                            <div class="alert alert-danger" role="alert">Nenhum usuário encontrado!</div>
                        @endforelse

                    </tbody>
                </table>

                {{ $users->onEachSide(0)->links() }}

            </div>
        </div>
    </div>
@endsection