@extends('layouts.app')
@section('content')
<div style="height: 100px"></div>
<div class="container-fluid">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{session()->get('success')}}
    </div>
    @endif
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <a href="{{route('books.create')}}" class="btn btn-outline-primary list-group-item">Add Book</a>
                <a href="{{route('categories.index')}}" class="btn btn-outline-primary list-group-item">Categories Book</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book2</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book3</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book4</a>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="card-default">
                @foreach($categories as $cate)
                <div class="card-header">{{$cate->name}}</div>
                <div class="card-body">
                    @foreach($books as $book)
                    <!-- <div class="col-md-2"> -->
                    <a href="#"><img style="height: 200px;width:227px;" src="{{asset('img/'.$book->image)}}"></a>
                    @endforeach
                </div>
                @endforeach
            </div>

        </div>
        <div class="col-md-3">
            <ul class="list-group">
                <a href="#" class="btn btn-outline-primary list-group-item">Book</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book 1</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book2</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book3</a>
                <a href="#" class="btn btn-outline-primary list-group-item">Book4</a>
            </ul>
        </div>
    </div>
</div>
@endsection