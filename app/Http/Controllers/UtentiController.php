<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UtentiModel;

class UtentiController extends Controller
{
    public function index(){
      $utenti = UtentiModel::all();
      return view('home', compact('utenti'));
    }

    public function show($id){
      $utente = UtentiModel::findOrFail($id);
      return view('showUtente', compact('utente'));
    }

    public function delete($id){
      $utente = UtentiModel::findOrFail($id);
      $utente -> delete();
      return redirect() -> route('home');
    }
}
