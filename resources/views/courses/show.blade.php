@extends('layouts.admin')

@section('content')
    <div class="container-fluid px-4">
        <!-- Cabeçalho da Página -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="mt-3">Detalhes do Curso</h2>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}" class="text-decoration-none">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('course.index') }}" class="text-decoration-none">Cursos</a>
                </li>
                <li class="breadcrumb-item active">Detalhes</li>
            </ol>
        </div>

        <!-- Alertas -->
        <x-alert />

        <!-- Cartão de Visualização -->
        <div class="card border-primary shadow mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Informações do Curso</h5>
                <div class="d-flex flex-wrap gap-2">
                    @can('index-classe')
                        <a href="{{ route('classe.index', ['course' => $course->id]) }}" class="btn btn-info btn-sm">
                            <i class="fa-solid fa-list"></i> Aulas
                        </a>
                    @endcan

                    @can('index-course')
                        <a href="{{ route('course.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fa-solid fa-list"></i> Listar
                        </a>
                    @endcan

                    @can('edit-course')
                        <a href="{{ route('course.edit', ['course' => $course->id]) }}" class="btn btn-warning btn-sm">
                            <i class="fa-regular fa-pen-to-square"></i> Editar
                        </a>
                    @endcan

                    @can('destroy-course')
                        <form action="{{ route('course.destroy', ['course' => $course->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Tem certeza que deseja apagar este registro?')">
                                <i class="fa-regular fa-trash-can"></i> Apagar
                            </button>
                        </form>
                    @endcan
                </div>
            </div>
            <div class="card-body">
                <dl class="row mb-0">
                    <dt class="col-sm-3">ID:</dt>
                    <dd class="col-sm-9">{{ $course->id }}</dd>

                    <dt class="col-sm-3">Nome:</dt>
                    <dd class="col-sm-9">{{ $course->name }}</dd>

{{--                    <dt class="col-sm-3">Instituicao:</dt>--}}
{{--                    <dd class="col-sm-9">{{ $instituicao->instituicao }}</dd>--}}

                    <dt class="col-sm-3">Preço:</dt>
                    <dd class="col-sm-9">{{ 'R$ ' . number_format($course->price, 2, ',', '.') }}</dd>

                    <dt class="col-sm-3">Cadastrado:</dt>
                    <dd class="col-sm-9">{{ \Carbon\Carbon::parse($course->created_at)->format('d/m/Y H:i:s') }}</dd>

                    <dt class="col-sm-3">Editado:</dt>
                    <dd class="col-sm-9">{{ \Carbon\Carbon::parse($course->updated_at)->format('d/m/Y H:i:s') }}</dd>
                </dl>
            </div>
        </div>
    </div>
@endsection
