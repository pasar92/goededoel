@extends('layouts.app')

@section('content')
<form method="POST" action="{{route('charity.store')}}">
    @csrf <!--              <-----------------------------------------------\> مهم جدا-->

    <div class="form-group">
      <label for="name">Naam</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Naam">
    </div>


    <div class="form-group">
      <label for="address">Adres</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="Adres">
    </div>
    <div class="form-group">
        <label for="description">Omschrijven</label>
        <input type="text" class="form-control" name="description" id="description" placeholder="Omschrijven">
      </div>

    <button type="submit" class="btn btn-primary">Opslaan</button>
  </form>
  @endsection