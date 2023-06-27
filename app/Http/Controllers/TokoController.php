<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

use App\Models\Customer;

class TokoController extends Controller
{
    public function index()
    {
        return view('toko/index');
    }

    public function detail()
    {
        return view('toko/detail');
    }
    public function about()
    {
        return view('toko/about');
    }

    public function admin()
    {
        $products = product::all();
        return view('toko/admin', compact('products'));
    }

    public function customer ()
    {
        $customers = Customer::all();
        return view ('toko/customer', compact('customers'));
    }

    public function create()
    {
        return view('toko/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        product::create($request->all());
        return redirect()->route('produk.admin')->with('succes', 'produk berhasil disimpan');
    }

    public function edit(Product $product)
    {
        return view('toko/edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('produk.admin')->with('delete', 'produk berhasil dihapus');
    }
    public function update(request $request, product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product->update($request->all());
        return redirect()->route('produk.admin')->with('update', 'product updated successfully');
    }



}
