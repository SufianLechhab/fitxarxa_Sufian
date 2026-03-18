<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function hello() {
        return ['missatge' => 'Hola FitXarxa!'];
    }
}