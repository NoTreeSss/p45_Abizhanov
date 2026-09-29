<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public array $products = [
        ['id' => 1, 'title' => 'Продукт 1', 'price' => 500, 'path' => 'pict1.jpg'],
        ['id' => 2, 'title' => 'Продукт 2', 'price' => 1500, 'path' => 'pict2.jpg'],
        ['id' => 3, 'title' => 'Продукт 3', 'price' => 800, 'path' => 'pict3.jpg'],
        ['id' => 4, 'title' => 'Продукт 4', 'price' => 2300, 'path' => 'pict4.jpg'],
        ['id' => 5, 'title' => 'Продукт 5', 'price' => 1200, 'path' => 'pict5.jpg'],
        ['id' => 6, 'title' => 'Продукт 6', 'price' => 450, 'path' => 'pict6.jpg'],
        ['id' => 7, 'title' => 'Продукт 7', 'price' => 3100, 'path' => 'pict7.jpg'],
        ['id' => 8, 'title' => 'Продукт 8', 'price' => 950, 'path' => 'pict8.jpg'],
    ];

    public function showIndex()
    {
        return view('home');
    }

    public function showArray()
    {
        $array = $this->products;
        return view('array', compact('array'));
    }
}
