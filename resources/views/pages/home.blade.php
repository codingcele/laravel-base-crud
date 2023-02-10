@extends('layouts.main-layout')

@section('content')
    <h1>Santi</h1>
    <a href="#">CREATE NEW SAINT</a>
        <ul>
            @foreach ($saints as $saint)
                <li>
                    <a href="{{ route('saint.show', ['id' => $saint -> id]) }}">
                        [{{$saint -> id}}] {{ $saint -> nome }} - {{ $saint -> numeroMiracoli }}
                    </a>
                    ---
                    <a href="{{ route('saint.destroy', ['id' => $saint -> id]) }}">X</a>
                </li>
            @endforeach
        </ul>
@endsection

