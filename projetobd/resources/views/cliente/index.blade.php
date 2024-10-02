<x-app-layout>
    <div class="container">
        <h1>Lista de Clientes</h1>

        @if ($cliente->isEmpty())
            <p>Não há cliente cadastrado.</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cargo</th>
                        <th>Salário</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->cargo }}</td>
                            <td>{{ number_format($cliente>salario, 2, ',', '.') }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>
                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-app-layout>