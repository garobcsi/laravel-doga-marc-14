@extends('layouts.main')

@section('title','HP karakterek')
@section('content')

    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Név</th>
                        <th>Nem</th>
                        <th>Munka</th>
                        <th>Varázspálca</th>
                        <th>Patronus</th>
                        <th>Faj</th>
                        <th>Dátum</th>
                        <th>Ház</th>
                        <th>show</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    <tr>--}}
{{--                        <td>Mark</td>--}}
{{--                        <td>Otto</td>--}}
{{--                        <td>@mdo</td>--}}
{{--                    </tr>--}}
                        @foreach($data as $i)
                            <tr>
                                <td>{{$i->name}}</td>
                                <td>{{$i->gender}}</td>
                                <td>{{$i->job}}</td>
                                <td>{{$i->wand}}</td>
                                <td>{{$i->patronus}}</td>
                                <td>{{$i->species}}</td>
                                <td>{{$i->birth}} - {{$i->death}}</td>
                                <td>{{$i->house->name}} <img class="img-fluid" src="{{asset('img/'.$i->house->img)}}" alt="{{$i->house->name}}"></td>
                                <td><a href="{{route('characters.show',$i->id)}}" class="btn btn-primary">Megnéz</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
