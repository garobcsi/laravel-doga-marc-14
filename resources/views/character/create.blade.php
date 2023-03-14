@extends('layouts.main')

@section('title','')
@section('content')

    <div class="container">
        <div class="row">
            <h1>Új karakter</h1>
            <form action="{{route('characters.store')}}" method="POST">
                @csrf
                @method('create')
                <label for="name">Név</label>
                <input class="form-control" type="text" name="name" id="name">
                <label for="gender">Nem</label>
                <input class="form-control" type="text" name="gender" id="gender">
                <label for="job">Munka</label>
                <input class="form-control" type="text" name="job" id="job">
                <label for="wand">Varázspálca</label>
                <input class="form-control" type="text" name="wand" id="wand">
                <label for="patronus">Patronus</label>
                <input class="form-control" type="text" name="patronus" id="patronus">
                <label for="species">Faj</label>
                <input class="form-control" type="text" name="species" id="species">
                <label for="birth">Született</label>
                <input class="form-control" type="date" name="birth" id="birth">
                <label for="death">Meghalt</label>
                <input class="form-control" type="date" name="death" id="death">
                <label for="house">Ház</label>
                <select class="form-select" id="house">

                </select>
                <button class="btn btn-success mt-3" type="submit">Mentés!</button>
            </form>
        </div>
    </div>

@endsection
