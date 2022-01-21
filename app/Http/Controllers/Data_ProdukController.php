<?php

namespace App\Http\Controllers;

use App\Models\Product;

class Data_ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data_produk.show', [
            'title' => 'Data Produk',
            'table' => 'Tabel Produk',
            'active' => 'data',
            'product' => Product::orderBy('id', 'desc')->get()
        ]);
    }

    
}