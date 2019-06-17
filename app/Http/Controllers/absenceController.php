<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absence;

class CandidatController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absences = absence::all();
        $niveau_etude = niveau_etude::all();

        return view('candidat/candidat_index', compact('absence'));
    }
}
