@extends('layout')

@section('petsCreate')
    <div class="container">
        <form action="/pets/store" method="POST">
            @csrf
            <div class="form-group">
                <label><b>Nome do animal</b></label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label><b>RGA</b></label>
                <input type="text" class="form-control" name="RGA">
            </div>
            <div class="form-group">
                <label><b>Data de nascimento</b></label>
                <input type="date" class="form-control" name="data_nascimento">
            </div>
            <div class="form-group">
                <label><b>Nome do tutor</b></label>
                <select class="form-control" name="owner_id">
                    <option selected disabled>Selecione uma opção</option>
                    @foreach ($owners as $owner)
                        <option value="{{ $owner['id'] }}">{{ $owner['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar registro">
        </form>
    </div>   
@endsection