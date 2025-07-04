<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller {
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function store(Request $request) {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required|unique:products',
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        Product::create($request->all());
        return redirect('/');
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);
        $request->validate([
            'kode' => 'required',
            'nama' => 'required|unique:products,nama,' . $id,
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);
        $product->update($request->all());
        return redirect('/');
    }

    public function destroy($id) {
        Product::destroy($id);
        return redirect('/')->with('success', 'Produk berhasil ditambahkan');
    }
}