@extends('layouts.app')

@section('content')

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      @guest
        <h6 style="color: brown">Login te kunnen doneren.</h6>

      @else
        <a href="{{ route('period.create', $charity->id) }}" class="ml-7">
          <i class="fas fa-edit  fa-lg">Doneren</i>
        </a>
      @endguest
      <h5 class="card-title">{{$charity->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$charity->name}}</h6>
      <p class="card-text">{{$charity->description}}</p>

      <a href="{{ route('charity.edit', $charity->id) }}" class="ml-7">
        <i class="fas fa-edit  fa-lg">Bewerken</i>
      </a>

      <form style="display:inline" action="{{ route('charity.destroy', $charity->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- this delete the item -->
        <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
            <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>
        </button>
      </form>
      
    </div>
  </div>

  @endsection