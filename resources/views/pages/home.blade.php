@extends('layouts.main-layout')

@section('content')
    <h1>Santi</h1>
    <div id="test">
        <ul>
            @foreach ($saints as $saint)
                <li>{{ $saint -> nome }} - {{ $saint -> numeroMiracoli }}</li>
            @endforeach
        </ul>
    </div>
@endsection

