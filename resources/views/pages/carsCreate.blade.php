@extends('template.main')

@section('content')

<h2>Ajoutez une voiture</h2>

<form action="" method="post">
    @csrf
    Marque : <input type="text" name="brand" id="">
    année : <input type="number" min="2000" max="2021" name="year" id="">
    couleur : <input type="text" name="color" id="">
    prix : <input type="number" min="0" name="price" id="">
    Remise : <input type="number">
    <button type="submit"></button>
</form>

@endsection