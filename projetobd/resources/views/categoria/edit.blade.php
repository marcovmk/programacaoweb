@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Editar Funcionário</h1>
        <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $cliente->nome }}" required>
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $cliente->cpf }}" required>
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Salário</label>
                <input type="number" step="0.01" name="telefone" id="telefone" class="form-control" value="{{ $cliente->telefone }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
            </div>
            <button type="submit" class="btn btn-success">Atualizar</button>
            <a href="{{ route('cliente.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection