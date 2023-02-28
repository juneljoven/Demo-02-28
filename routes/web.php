<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/person',function() {
    return view('person',[
        'name' => 'Junel R. Joven',
        'age' => 21,
        'address' => 'Sta. Justina Buhi Camarines Sur',
        'color' => 'ligthgreen',
        'siblings' => [
        [
            'name' => 'Pedro',
            'age' => 23
        ],
        [
            'name' => 'Maria',
            'age' => 13
        ],
        [
            'name' => 'Juan',
            'age' => 4
        ],
        [
            'name' => 'Wilson',
            'age' => 11
        ],
        ]
    ]);
    
});