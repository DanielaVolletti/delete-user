@extends('layouts.mainLayout')

@section('content')
  <h1>LISTA UTENTI</h1>
  <ul>
    @foreach ($utenti as $utente)
      <li>
        <a href="{{ route('showUtente', $utente['id']) }}">{{$utente['name']}}</a>
      </li>
    @endforeach
  </ul>
@endsection
