@extends('layouts.main-layout')

@section('content')
    <h1>Santi</h1>
    <div id="test">
        <ul>
            @foreach ($saints as $saint)
                <a href="/saint/{{ $saint -> id }}">
                    <li>[{{$saint -> id}}] {{ $saint -> nome }} - {{ $saint -> numeroMiracoli }}</li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection

