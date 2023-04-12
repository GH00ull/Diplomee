<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sheet_Products;
use Illuminate\Http\Request;

class Addcontroller extends Controller
{
    public function index()
    {
        $sheets = Sheet_Products::all();
        return view('sheets', compact('sheets'));
    }
    public function list()
    {
        $sheets = Sheet_Products::all();
        return view('sheets', compact('sheets'));
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => '',
            'opis' => '',
            'price' => '',
            'link' => '',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Сохранение изображения на сервере
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Сохранение данных о товаре в базе данных
        $product = new Product();
        $product->product_name = $request->input('name');
        $product->description = $request->input('opis');
        $product->price = $request->input('price');
        $product->image = $imageName;
        $product->save();

        dd($product);

        // return redirect('/');
    }
}