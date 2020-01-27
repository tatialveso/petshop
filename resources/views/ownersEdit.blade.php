@extends('layout')

@section('ownersEdit')
    <div class="container">
        <form action="/owners/update/{{ $owners['id'] }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label><b>Nome completo</b></label>
                <input type="text" class="form-control" name="name" value="{{ $owners['name'] }}">
            </div>
            <div class="form-group">
                <label><b>Número de telefone</b></label>
                <input type="text" class="form-control" name="telefone" value="{{ $owners['telefone'] }}">
            </div>
            <div class="form-group">
                <label><b>Nome do animal</b></label>
                <select class="form-control" name="pet_id">
                    <option disabled>Selecione uma opção</option>
                    @foreach ($pets as $pet)
                        <option value="{{ $pet['id'] }}" @if($pet['id'] == $pet['pet_id']) selected @endif>{{ $pet['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar registro">
        </form>
    </div>   
@endsection