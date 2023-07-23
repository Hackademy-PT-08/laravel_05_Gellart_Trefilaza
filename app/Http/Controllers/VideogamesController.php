<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VideogamesController extends Controller
{
    public $videogames = [
        ['id' => 1, 'name' => 'Spiderman 2'],
        ['id' => 2, 'name' => 'Spiderman 2'],
        ['id' => 3, 'name' => 'Spiderman 2'],
        ['id' => 4, 'name' => 'Spiderman 2'],
        ['id' => 5, 'name' => 'Spiderman 2'],
        ['id' => 6, 'name' => 'Spiderman 2'],
        ['id' => 7, 'name' => 'Spiderman 2'],
        ['id' => 8, 'name' => 'Spiderman 2'],
        ['id' => 9, 'name' => 'Spiderman 2'],
        ['id' => 10, 'name' => 'Spiderman 2']
    ];

    public function home() {
        return view('home');
    }

    public function index(){
        return view('videogames', ['videogames' => $this->videogames]);
    }

    public function show($id){
        foreach ($this->videogames as $videogame) {
            if ($id == $videogame['id']) {
                return view('videogames_details', ['videogames' => $videogame]);
            }
        }
    }

}
