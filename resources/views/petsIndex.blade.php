@extends('layout')

@section('petsIndex')
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nome do animal</th>
                    <th scope="col">RGA</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Nome do tutor</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr class="text-center">
                        <td>{{ $pet["name"] }}</td>
                        <td>{{ $pet["RGA"] }}</td>
                        <td>{{ $pet["data_nascimento"] }}</td>
                        <td>{{ $pet["owner_id"] }}</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-link"><a href="/pets/edit/{{ $pet['id'] }}">Editar</a></button>
                                </div>
                                <div class="col-6">
                                    <form action="/pets/destroy/{{ $pet['id'] }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-link" value="Excluir">
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection