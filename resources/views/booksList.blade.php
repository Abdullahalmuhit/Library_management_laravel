@extends('layouts.master')

@section('content')


<div class="panel panel-default">
  <div class="panel-heading">Books List</div>
  <div class="panel-body">
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">BookID</th>
          <th scope="col">Title</th>
          <th scope="col">Edition</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Books Available</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($books as $book)

        @php 
             $book_available = $book->totalAvail - $book->bookIssues->count();
        @endphp
        <tr>
          <td>{{$book->bookId}}</td>
          <td>{{$book->bookTitle}}</td>
          <td>{{$book->edition}}</td>
          <td>{{$book->category->catName}}</td>
          <td>{{$book->authors->name}}</td>
          <td>{{$book_available}}</td>
          <td>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i></button></span>
            <span><button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-trash"></i></button></span>

          </td>
        </tr>
        @endforeach
  </div>
</div>


@endsection
