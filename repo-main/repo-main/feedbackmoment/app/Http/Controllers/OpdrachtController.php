<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Fruit;

class OpdrachtController extends Controller
{
    public function show()
    {
        $name = 'Dylan van der Meijde';
        $fruits = Fruit::all(); // Haal alle fruitgegevens op uit de database.

        return view('opdracht', ['fruits' => $fruits, 'name'=> $name]);
    }
}
