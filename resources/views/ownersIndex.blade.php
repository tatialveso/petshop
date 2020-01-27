@extends('layout')

@section('petsIndex')
    <div class="container">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">Nome completo</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Animal</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($owners as $owner)
                    <tr class="text-center">
                        <td>{{ $owner["name"] }}</td>
                        <td>{{ $owner["telefone"] }}</td>
                        <td>{{ $owner["pet_id"] }}</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-link"><a href="/owners/edit/{{ $owner['id'] }}">Editar</a></button>
                                </div>
                                <div class="col-6">
                                    <form action="/owners/destroy/{{ $owner['id'] }}" method="POST">
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