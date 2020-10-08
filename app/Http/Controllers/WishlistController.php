<?php

namespace App\Http\Controllers;

use App\Http\Requests\WishlistRequest;
use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function list()
    {
        $produtos = Wishlist::all();
        return view('admin.list',compact('produtos'));
    }
    public function form()
    {
        return view('admin.form');
    }
    public function save(WishlistRequest $request)
    {
        Wishlist::create($request->all());
        $request->session()->flash('sucesso',"Produto $request->name incluido com sucesso");
        return redirect()->route('admin.list');
    }
}
