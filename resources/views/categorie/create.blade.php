@extends('layouts.app')
@section('content')
<div style="height: 80px"></div>
<div class="card-default justify-content-center">
    <div class="card-header">
        <h1 class="text-center bg-dark text-white">{{isset($categorie)?"Update categorie" :"Add new categorie"}}</h1>
    </div>
    <div class="card-body">
        <form action="{{(isset($categorie)? route('categories.update',$categorie->id):route('categories.store'))}}" method="POST">
            @csrf
            @if(isset($categorie))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="name"> Name</label>
                <input name="name" type="text" value="{{(isset($categorie) ? $categorie->name:'')}}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Last Name">
            </div>
            <button type="submit" class="btn btn-primary">{{isset($categorie)?"Update " :"save"}}</button>
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
    </div>
</div>
@endsection