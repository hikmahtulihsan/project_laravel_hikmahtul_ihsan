<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Tampilkan semua produk (pakai Eloquent)
    public function index()
    {
        $products = Product::all(); // Eloquent ORM
        return view('products.index', compact('products'));
    }

    // Form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Simpan produk baru (pakai Query Builder)
    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return redirect()->route('products.index');
    }

    // Form edit produk
    public function edit($id)
    {
        $product = DB::table('products')->where('id', $id)->first(); // Query Builder
        return view('products.edit', compact('product'));
    }

    // Update produk (pakai Eloquent)
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id); // Eloquent ORM
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        return redirect()->route('products.index');
    }

    // Hapus produk (pakai Query Builder)
    public function destroy($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('products.index');
    }
}
