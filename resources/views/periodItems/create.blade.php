@extends('layouts.app')
@section('content')
<form method="POST" action="{{route('period.periodItems.store', $period->id)}}">

  @csrf <!--              <-----------------------------------------------\> مهم جدا-->

  @if(isset($charities))
    <select class="form-select" aria-label="Default select example" name="charity_id">
      <option selected>...</option>

        @foreach($charities as $charity)
          <option value={{$charity->id}}>{{$charity->name}}</option>
        @endforeach
    </select>
  @endif

  <button type="submit" class="btn btn-primary">Opslaan</button>
</form>
@endsection