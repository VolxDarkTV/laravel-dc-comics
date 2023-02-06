<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Model
use App\Models\Person;

class MainController extends Controller
{
    public function personHome(){

        $people = Person::all();
        $data = [
            'people' => $people,
        ];
        return view('pages.personHome', $data);
    }

    public function personShow(Person $person){

        // $person = Person::find($id);

        // $data = [
        //     'person' => $person
        // ];

        return view('pages.personShow', compact('person'));
    }
}
