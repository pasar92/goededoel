@extends('layouts.app')

@section('content')

{{-- @guest
<h1>Inloggen</h1>
@else

<h1>Hallo {{Auth::user()->name}}</h1>
@endguest --}}
@if(isset($charities))
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Naam</th>
                    <th scope="col">Adres</th>
                    <th scope="col">Omschrijven</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
        @if(isset($charities))
                    

            @foreach($charities as $charity)
                <tr>
                    <td scope="row">{{$charity->id}}</td>
                    <td scope="row">{{$charity->name}}</td>
                    <td scope="row">{{$charity->address}}</td>
                    <td scope="row">{{$charity->description}}</td>

                    <td>
                        <form style="display:inline" action="{{ route('charity.destroy', $charity->id) }}" method="POST">

                            <a href="{{ route('charity.show', $charity->id) }}" title="show" class="ml-7">
                                <i class="fas fa-eye text-success  fa-lg">Bekijken</i>
                            </a>
                            <span>-</span>    
                            <a href="{{ route('charity.edit', $charity->id) }}" class="ml-7">
                                <i class="fas fa-edit  fa-lg">Bewerken</i>

                            </a>

                            @csrf
                            @method('DELETE')
                            <span>-</span>  

                            <!-- this delete the item -->
                            <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
                                <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>

                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endisset
        @else
        
            <h1>Loading...</h1>
        
        @endif
    </tbody>
</table>

@endsection