@extends('layouts.app')

@section('content')

{{-- @guest
<h1>Inloggen</h1>
@else

<h1>Hallo {{Auth::user()->name}}</h1>
@endguest --}}
@if(isset($periods)){
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Bedrag</th>
                    <th scope="col">Status</th>
                    <th scope="col">Start Datum</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>


            @foreach($periods as $period)
                <tr>
                    <td scope="row">{{$period->id}}</td>
                    <td scope="row">{{$period->amount}}</td>
                    <td scope="row">{{$period->status}}</td>
                    <td scope="row">{{$period->start}}</td>

                    <td>
                        <form style="display:inline" action="{{ route('period.destroy', $period->id) }}" method="POST">

                            <a href="{{ route('period.show', $period->id) }}" title="show" class="ml-7">
                                <i class="fas fa-eye text-success  fa-lg">Bekijken</i>
                            </a>
                            <span>-</span>    
                            <a href="{{ route('period.edit', $period->id) }}" class="ml-7">
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
        @else
        
            <h1>Loading...</h1>
        
        @endif
    </tbody>
</table>

@endsection