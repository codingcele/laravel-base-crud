@extends('layouts.main-layout')

@section('content')
    <h1>SANTO : {{ $saint -> nome }} {{ $saint -> numeroMiracoli }}</h1>
    <div>
        <h3>
            {{ $saint -> luogoNascita}} {{ $saint -> dataBenedizione}}
        </h3>
    </div>
@endsection