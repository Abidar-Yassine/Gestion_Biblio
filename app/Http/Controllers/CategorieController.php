<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategorieRequest;
use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categorie.index')->with('categories', Categorie::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategorieRequest $request)
    {
        $cate = new Categorie();
        $cate->name = $request->name;
        $cate->save();
        $request->session()->flash('success', "New Categorie Created Successfly");
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = new Categorie();
        $cate = Categorie::find($id);
        return view('categorie.create')->with('categorie', $cate);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategorieRequest $request, $id)
    {
        $cate = new Categorie();
        $cate = Categorie::find($id);
        $cate->name = $request->name;
        $cate->update();
        $request->session()->flash('success', " Categorie updated Successfly");
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cate = new Categorie();
        $cate = Categorie::find($id);
        $cate->delete();
        session()->flash('success', " Categorie deleted Successfly");
        return redirect(route('categories.index'));
    }
}
