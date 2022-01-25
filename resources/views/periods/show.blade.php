@extends('layouts.app')

@section('content')

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      @guest
        <h6 style="color: brown">Login te kunnen doneren.</h6>

      @else
        <a href="{{ route('period.periodItems.create', $period->id) }}" class="ml-7">
          <i class="fas fa-edit  fa-lg">Doneren aan de organisatie.</i>
        </a>
      @endguest
      <h5 class="card-title">{{$period->amount}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$period->status}}</h6>
      <p class="card-text">{{$period->start}}</p>

      {{-- <a href="{{ route('period.edit', $period->id) }}" class="ml-7">
        <i class="fas fa-edit  fa-lg">Bewerken</i>
      </a> --}}

      <form style="display:inline" action="{{ route('period.destroy', $period->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <!-- this delete the item -->
        <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
            <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>
        </button>
    </div>
  </div>

  @foreach ($periodItems as $periodItem)


  

  @endforeach
      
  @endforeach

  @endsection