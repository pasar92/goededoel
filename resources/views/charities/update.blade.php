@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('charity.update',['charity'=> $charity->id])}}">
    @csrf <!--              <-----------------------------------------------\> مهم جدا-->
    @method('PUT')
    <div class="form-group">
      <label for="name">Naam</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Naam" value="{{$charity->id}}">
    </div>


    <div class="form-group">
      <label for="address">Naam</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Adres" value="{{$charity->name}}">
    </div>

    <div class="form-group">
      <label for="address">Adres</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Adres" value="{{$charity->address}}">
    </div>

    <div class="form-group">
        <label for="description">Omschrijven</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Omschrijven" value="{{$charity->description}}">
      </div>

    <button type="submit" class="btn btn-primary">Opslaan</button>
  </form>
  @endsection