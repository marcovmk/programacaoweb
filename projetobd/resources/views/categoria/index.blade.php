@extends('layouts.app')

@section('content')
    <h1>Lista de Cliente</h1>

    @if ($funcionarios->isEmpty())
        <p>Não há Cliente cadastrados.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Endereco</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cliente as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente>nome }}</td>
                        <td>{{ $cliente->cargo }}</td>
                        <td>{{ $cliente->salario }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>
                            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('cliente.destroy', $cliete->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este Cliente?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection