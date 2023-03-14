@extends('layouts.main')

@section('title',$data->house->name."-".$data->name)
@section('content')

    <div class="container">
        <div class="row">
            <h1 class="text-center">{{$data->house->name." - ".$data->name}}</h1>
            <ul>
                <li><b>Név:</b> {{$data->name?? "Nincs kitöltve !"}}</li>
                <li><b>Nem:</b> {{$data->gender?? "Nincs kitöltve !"}}</li>
                <li><b>Munka:</b> {{$data->job?? "Nincs kitöltve !"}}</li>
                <li><b>Varázspálca:</b> {{$data->wand?? "Nincs kitöltve !"}}</li>
                <li><b>Patronus:</b> {{$data->patronus?? "Nincs kitöltve !"}}</li>
                <li><b>Faj:</b> {{$data->species?? "Nincs kitöltve !"}}</li>
                <li><b>Dátum</b> {{$data->birth}} - {{$data->death}}</li>
                <li><b>Ház:</b> {{$data->house->name}}</li>
            </ul>
            <form action="{{route('characters.destroy',$data->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit">Törlés !</button>
            </form>
        </div>
    </div>

@endsection
