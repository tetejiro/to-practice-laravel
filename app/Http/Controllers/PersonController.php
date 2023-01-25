<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller {
    public function index(Request $request) {
        $items = Person::all();
        // print '<pre>';
        // print_r ($items);
        // print '</pre>';

        return view('person.index', ['items' => $items]);
    }
}
