<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Person;

class MainController extends Controller
{
    public function home(){

        $people = Person::all();
        $data = [
            'people' => $people,
        ];
        return view('pages.personHome', $data);
    }
}
