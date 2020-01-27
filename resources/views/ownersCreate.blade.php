@extends('layout')

@section('ownersCreate')
    <div class="container">
        <form action="/owners/store" method="POST">
            @csrf
            <div class="form-group">
                <label><b>Nome completo</b></label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label><b>Número de telefone</b></label>
                <input type="text" class="form-control" name="telefone">
            </div>
            <div class="form-group">
                <label><b>Nome do animal</b></label>
                <select class="form-control" name="pet_id">
                    <option selected disabled>Selecione uma opção</option>
                    @foreach ($pets as $pet)
                        <option value="{{ $pet['id'] }}">{{ $pet['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar registro">
        </form>
    </div>   
@endsection