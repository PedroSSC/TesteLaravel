<?php

namespace App\Http\Controllers;


//Classe do Laravel para compontentes de requests;
use Illuminate\Http\Request;


class SeriesController extends Controller{
    public function index(Request $request){

        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];
    
        return view('series.index', ['series' => $series]);
    }

    public function create(){
        return view('series.create');
    }

}