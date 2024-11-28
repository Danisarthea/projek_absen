<?php

namespace App\Http\Controllers\Wali;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WalikelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // menu wali kelas

//    public function index()
//    {
//        //
//        return view('home');
//    }

   public function antri_verifikasi()
   {
       //
       return view('pages.walikelas.verifikasi.antriverifikasi');
   }

   public function verifikasi()
   {
       //
       return view('pages.walikelas.verifikasi.verifikasi');
   }

   public function laporan()
   {
       //
       return view('pages.walikelas.laporan.laporan');
   }

   // end menu wali kelas
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
