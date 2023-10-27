<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        //$Filmler = Index::find(1) //first()
        //$Filmler = Filmler::where('id', 1)->first();
        //$Filmler = İndex::whereRaw('id=?', array(1))->first();
        //$Filmler = IndexController::all();
        $filmler = IndexController::all();
        return view('Index', array('adi', 'tarih', 'aciklama', 'afiş' => $filmler));
    }
}
