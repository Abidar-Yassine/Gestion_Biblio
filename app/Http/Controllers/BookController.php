<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\Categorie;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index', array(
            'books' => Book::all(),
            'categories' => Categorie::All()
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('book.create')->with("auteurs",Author::all());
        return view('book.create', array(
            'auteurs' => Author::all(),
            'categories' => Categorie::All()
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        //dd($request->image->store('storage/img','public'));
        //  Book::create($request->all());
        //   $request->session()->flash('success', "New Categorie Created Successfly");
        //  return redirect(route('book.index'));
        $book = new Book();
        // if ($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientMimeType();
        //     $filename = time() . '.' . $extension;
        //     $file->move('/stotage/image', $filename);
        //     $book->image = $filename;
        // }else{
        //     return $request;
        // }
            $book->Isbn = $request->isbn;
            $book->Title = $request->title;
            $book->categorie_id = $request->Select_id_categorie;
            $book->author_id = $request->Select_id_auteu;
            $book->Nb_exemplaire = $request->nbExemple;
            $book->save();
            $request->session()->flash('success', "New Book Created Successfly");
            return redirect(route('books.index'));
        
    }
    // if ($request->file('photo')->isValid()) {
    //     $path = $request->image->store('images', 'public');
    // }
    

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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
