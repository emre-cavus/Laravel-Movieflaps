<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        $users = IndexController::all();
        return view('Index', array('adi', 'tarih', 'aciklama', 'afiş' => $users));
    }
}
