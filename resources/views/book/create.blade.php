@extends('layouts.app')

@section('content')
<div style="height: 80px"></div>
<div class="container">
    <div class="card-default justify-content-center">
        <div class="card-header">
            <h1 class="bg-primary text-white text-center">Add new Book</h1>
        </div>
        <div class="card-body">
            <form action="{{route('books.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="isbn">Isbn Book</label>
                    <input name="isbn" class="form-control @error('isbn') is-invalid @enderror" placeholder="Isbn">
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title">
                </div>
                <div class="form-group">
                    <label for="NbExemplaire ">Nombre Exemplaire</label>
                    <input name="nbExemple" class="form-control @error('nbExemple') is-invalid @enderror" placeholder="Nombre Exemplaire">
                </div>
                <div class="form-group">
                    <label for=""></label>
                    <input name="image" type="file" class="form-control @error('image') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="id_auteeur">Auteur</label>
                    <select class="form-control @error('Select_id_auteu') is-invalid @enderror" name="Select_id_auteu" id="S_id_aut">
                        @foreach($auteurs as $auteur)
                        <option name="auteur" value="{{$auteur->id}}">{{$auteur->first_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_categorie">Categorie</label>
                    <select class="form-control @error('Select_id_categorie') is-invalid @enderror" name="Select_id_categorie" id="S_id_cat">
                        @foreach($categories as $cate)
                        <option name="cate" value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" value="Save" class="btn btn-primary">
            </form>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                    <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- @error('isbn')
              <div class="alert alert-danger">
                  {{$message}}
              </div>

            @enderror -->
        </div>
    </div>
</div>


@endsection