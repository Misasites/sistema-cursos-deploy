@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <!-- Header e Breadcrumb -->
        <div class="mb-4">
            <div class="d-flex align-items-center justify-content-between">
                <h2 class="mt-3">Cursos</h2>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard.index') }}" class="text-decoration-none">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Cursos</li>
                </ol>
            </div>
        </div>

        <!-- Card de Pesquisa -->
        <div class="card mb-4 border-primary shadow">
            <div class="card-header bg-light text-dark">
                <strong>Pesquisar</strong>
            </div>
            <div class="card-body">
                <x-alert />
                <form action="{{ route('course.index') }}" method="GET">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" placeholder="Nome do curso">
                        </div>
                        <div class="col-md-6 d-flex align-items-end">
                            <button type="submit" class="btn btn-info me-2"><i class="fa-solid fa-magnifying-glass"></i> Pesquisar</button>
                            <a href="{{ route('course.index') }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Limpar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Card de Listagem -->
        <div class="card mb-4 border-primary shadow">
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <strong>Listar</strong>
                <div>
                    @can('create-course')
                        <a href="{{ route('course.create') }}" class="btn btn-success btn-sm me-2">
                            <i class="fa-regular fa-square-plus"></i> Cadastrar
                        </a>
                    @endcan
                    @can('generate-pdf-course')
                        <a href="{{ url('generate-pdf-course?' . request()->getQueryString()) }}" class="btn btn-warning btn-sm">
                            <i class="fa-regular fa-file-pdf"></i> Gerar PDF
                        </a>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <x-alert />
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
{{--                        <th class="">ID</th>--}}
                        <th>Nome</th>
                        <th class="">Preço</th>
                        <th class="">Instituição</th>
                        <th class="text-center"> Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($courses as $course)
                        <tr>
{{--                            <td class="d-none d-sm-table-cell">{{ $course->id }}</td>--}}
                            <td>{{ $course->name }}</td>

                            <td class="d-none d-md-table-cell">{{ 'R$ ' . number_format($course->price, 2, ',', '.') }}</td>

                            <td>{{ $course->instituicao }}</td>
                            <td class="text-center">
                                @can('index-classe')
                                    <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="btn btn-info btn-sm me-1 mb-1" title="Lista">
                                        <i class="fa-solid fa-list"></i>
                                    </a>
                                @endcan
                                @can('show-course')
                                    <a href="{{ route('course.show', ['course' => $course->id]) }}" class="btn btn-primary btn-sm me-1 mb-1" title="Visualizar">
                                        <i class="fa-regular fa-eye"></i>
                                    </a>
                                @endcan
                                @can('edit-course')
                                    <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-warning btn-sm me-1 mb-1" title="Editar">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </a>
                                @endcan
                                @can('destroy-course')
                                        <!-- Botão para abrir o modal -->
                                        <button type="button" class="btn btn-danger btn-sm me-1 mb-1" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $course->id }}" title="Apagar">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $course->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $course->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger text-white">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $course->id }}">Confirmar Exclusão</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza de que deseja excluir o curso <strong>{{ $course->name }}</strong>? Esta ação não pode ser desfeita.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST" class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Apagar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endcan
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="alert alert-danger" role="alert">Nenhum curso encontrado!</div>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>

                <!-- Paginação -->
                <div class="d-flex justify-content-center mt-4">
                    {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
