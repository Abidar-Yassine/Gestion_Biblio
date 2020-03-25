@extends('layouts.app')
@section('content')
<div style="height: 80px"></div>
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <a class="btn btn-outline-primary list-group-item">Add author</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book 1</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book2</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book3</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book4</a>
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <div class="card-header text-center bg-dark text-white">All Authors</div>
                @foreach($auteurs as $auteur)
                <li class="list-group-item">{{$auteur->last_name}}
                    <form action="{{route('athors.destroy',$auteur->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a class="btn btn-primary btn-sm float-right ml-2" href="{{route('athors.edit',$auteur->id)}}">Update</a>
                        <button type="submit" class="btn btn-danger btn-sm float-right ml-2">Delete</button>
                    </form>
                </li>
                @endforeach
            </ul>
            <div class="card-footer">
                <a href="{{route('athors.create')}}" class=" btn btn-primary">Add Author</a>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-group">
                <a href="#" class="btn btn-outline-primary list-group-item">kjabvk</a>
                <a href="#" class="btn btn-outline-primary list-group-item">dvljsj 1</a>
                <a href="#" class="btn btn-outline-primary list-group-item">dvlnjv</a>
                <a href="#" class="btn btn-outline-primary list-group-item">dljvbjd</a>
                <a href="#" class="btn btn-outline-primary list-group-item">sdvlbadj</a>
            </ul>
        </div>
    </div>
</div>
@endsection