@extends('layout')

@section('petsEdit')
    <div class="container">
        <form action="/pets/update/{{ $pet['id'] }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label><b>Nome do animal</b></label>
                <input type="text" class="form-control" name="name" value="{{ $pet['name'] }}">
            </div>
            <div class="form-group">
                <label><b>RGA</b></label>
                <input type="text" class="form-control" name="RGA" value="{{ $pet['RGA'] }}">
            </div>
            <div class="form-group">
                <label><b>Data de nascimento</b></label>
                <input type="date" class="form-control" name="data_nascimento" value="{{ $pet['data_nascimento'] }}">
            </div>
            <div class="form-group">
                <label><b>Nome do tutor</b></label>
                <select class="form-control" name="owner_id">
                    <option disabled>Selecione uma opção</option>
                    @foreach ($owners as $owner)
                        <option value="{{ $owner['id'] }}" @if($owner['id'] == $pet['owner_id']) selected @endif>{{ $owner['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Editar registro">
        </form>
    </div>   
@endsection