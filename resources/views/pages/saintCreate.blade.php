@extends('layouts.main-layout')

@section('content')
    <h1>CREATE NEW SAINT</h1>
    <form method="POST" action="{{ route('saint.store') }}">
        @csrf
        <label for="name ">Name</label>
        <input type="text" name="nome">
        <br>
        <label for="birthplace ">Birthplace</label>
        <input type="text" name="luogoNascita">
        <br>
        <label for="blessingDate ">Blessing date</label>
        <input type="date" name="dataBenedizione">
        <br>
        <label for="miraclesCount">Miracles count</label>
        <input type="number" name="numeroMiracoli">
        <br>
        <input type="submit" value="CREATE NEW SAINT">
    </form>
@endsection