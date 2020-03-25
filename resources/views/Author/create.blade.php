@extends('layouts.app')
@section('content')
<div style="height: 80px"></div>
<div class="card-default justify-content-center">
    <div class="card-header">
        <h1 class="text-center bg-dark text-white">{{isset($autor)?"Update Author" :"Add new Author"}}</h1>
    </div>
    <div class="card-body">
        <form action="{{(isset($autor)? route('athors.update',$autor->id):route('athors.store'))}}" method="POST">
            @csrf
            @if(isset($autor))
            @method('PUT')
            @endif
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input name="last_name" type="text" value="{{(isset($autor) ? $autor->last_name:'')}}" class="form-control @error('first_name') is-invalid @enderror" placeholder="Last Name">
            </div>
            <div class="form-group">
                <label for="first_name">Last Name</label>
                <input name="first_name" type="text" value="{{(isset($autor) ? $autor->first_name:'')}}" class="form-control @error('last_name') is-invalid @enderror" placeholder="first Name">
            </div>
            <button type="submit" class="btn btn-primary">{{isset($autor)?"Update " :"save"}}</button>
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