@extends('layouts.main-layout')

@section('content')
    <h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('saint.update', $saint) }}">
        @csrf
        <label for="name ">Name</label>
        <input type="text" name="nome" value="{{ $saint -> nome }}">
        <br>
        <label for="birthplace ">Birthplace</label>
        <input type="text" name="luogoNascita" value="{{ $saint -> luogoNascita }}">
        <br>
        <label for="blessingDate ">Blessing date</label>
        <input type="date" name="dataBenedizione" value="{{ $saint -> dataBenedizione }}">
        <br>
        <label for="miraclesCount">Miracles count</label>
        <input type="number" name="numeroMiracoli" value="{{ $saint -> numeroMiracoli }}">
        <br>
        <input type="submit" value="UPDATE SAINT">
    </form>
@endsection