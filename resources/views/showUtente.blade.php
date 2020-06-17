@extends('layouts.mainLayout')

@section('content')
  <div class="utente">
    <h2>{{$utente['name']}}</h2>
    <h2>{{$utente['email']}}</h2>
    <h2>{{$utente['address']}}</h2>
    <h2>{{$utente['phone']}}</h2>
    <h2>{{$utente['dateOfBirth']}}</h2>
    <a href="{{route('deleteUtente', $utente['id'])}}">Delete Utente</a>
  </div>
@endsection
