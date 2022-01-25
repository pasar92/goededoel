@extends('layouts.app')

charities

@section('content')
<form method="POST" action="{{route('period.store')}}">
    @csrf <!--              <-----------------------------------------------\> مهم جدا-->

    <div class="form-group">
      <label for="start">Start datum</label>
      <input type="date" class="form-control" name="start" id="start">
    </div>

    <div class="form-group">
        <label for="amount">Bedrag</label>
        <input type="number" class="form-control" name="amount">
      </div>

    <button type="submit" class="btn btn-primary">Opslaan</button>
  </form>
  @endsection