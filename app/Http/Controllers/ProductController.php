<?php

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private array $products = [
        1 => ['name' => 'Kemeja Flanel', 'price' =>  90000],
        2 => ['name' => 'Jaket Denim', 'price' =>  150000],
        3 => ['name' => 'Kaos Band 90an', 'price' =>  60000],
        ];
    

    public function index()
    {
    return view('products.index', [
        'products' => $this->products,
    ]);
    }

    public function show($id)
    
    {
    if(!isset($this ->products[$id])){
        abort(404);
    }

    return view('products.show', [
        'id' => $id,
        'product' => $this->products[$id],
    ]);
    }
}
