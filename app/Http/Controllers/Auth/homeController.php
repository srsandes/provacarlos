<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller {
    public function home() {
        return view ('principal');
    }
}
public function specs() {
    return view ('specs');
}

public function faleconosco() {
    return view ('faleconosco');
}

