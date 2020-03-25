<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Author;
use Illuminate\Http\Request;

class AuthoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Author.index')->with('auteurs', Author::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Author.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorRequest $request)
    {
        Author::create($request->all());
        $request->session()->flash('success', "New Author Created Successfly");
        return redirect(route('athors.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = new Author();
        $author = Author::find($id);
        return view('Author.create')->with('autor', $author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorRequest $request, $id)
    {
        $author = Author::find($id);
        $author->first_name = $request->first_name;
        $author->last_name = $request->last_name;
        $author->update();
        $request->session()->flash('success', " Author Updated Successfly");
        return redirect(route('athors.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author=new Author();
        $author=Author::find($id);
        $author->delete();
        session()->flash('success', " Author Deleted Successfly");
        return redirect(route('athors.index'));
    }
}
