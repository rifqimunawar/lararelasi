<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Penghuni;
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
  public function index()
  {
      $penghunies = Penghuni::with('kamars')->latest()->get();

      return view('penghuni.index', compact('penghunies'));
  }
  
    public function create(Request $request)
    {
      $kamars = Kamar ::all();
      return view('penghuni.create', compact('kamars'));
    }
  
    public function store(Request $request)
    {
      $penghunies = $request -> all();
      $penghunies = Penghuni::create($penghunies);
      return redirect('/');
    }
    public function edit($id, Request $request)
    {
      $penghunies = Penghuni ::find($id);
      $kamars=Kamar ::all();
      return view('penghuni.edit', compact('penghunies', 'kamars'));
    }
    public function update($id, Request $request)
    {
      $penghunies = Penghuni::findOrFail($id);
    
      $penghuniesData = $request->all();
      $penghunies->update($penghuniesData);
    
      return redirect('/');
    }
    public function destroy($id)
    {
        $penghuni = Penghuni::findOrFail($id);
        $penghuni->delete();
        return redirect('/');
    }
}
