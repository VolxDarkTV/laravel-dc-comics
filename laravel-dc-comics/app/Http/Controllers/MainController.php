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

    // --- personShow
    public function personShow(Person $person){

        // $person = Person::find($id);

        // $data = [
        //     'person' => $person
        // ];

        return view('pages.personShow', compact('person'));
    }

    // --- personCreate
    public function personCreate(){

        return view('pages.personCreate');
    }

    // --- personStore
    public function personStore(Request $request){

        // $data = $request -> all();
        $data = $request -> validate([
            'firstName' => 'required|string|max:32|alpha:ascii',
            'lastName' => 'required|string|max:32|alpha:ascii',
            'dateOfBirth' => 'required|date|before:today',
            'height' => 'nullable|integer|min:0',
        ]);

        $person = new Person();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];
        
        $person -> save();

        return redirect() -> route('person.Home');
    }

     // --- personDelete
     public function personDelete(Person $person){

        $person -> delete();

        return redirect() -> route('person.Home');
    }

    // --- personEdit
    public function personEdit(Person $person){

        $data = [
            'person' => $person
        ];
        return view('pages.personEdit', $data);
    }

    // --- personUpdate
    public function personUpdate(Request $request, Person $person){

        $data = $request -> all();

        $person -> firstName = $data['firstName'];
        $person -> lastName = $data['lastName'];
        $person -> dateOfBirth = $data['dateOfBirth'];
        $person -> height = $data['height'];
        
        $person -> save();

        // add parameter Person
        $data = [
            'person' => $person
        ];
        return redirect() -> route('person.Show', $data);

    }
}
