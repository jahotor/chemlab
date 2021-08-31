<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praticalController extends Controller
{
    //

    function acid_base(){
        return view('acid_base_solutons');
    }

    function concentration(){
        return view('concentration');
    }

    function ph_scale(){
        return view('ph_scale');
    }

    function chemical_eqn(){
        return view('balancing_chemical_equations');
    }

    function build_an_atom(){
        return view('build_an_atom');
    }

    function build_a_molecule(){
        return view('build_a_molecule');
    }
}
