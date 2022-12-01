@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class="container" style="margin-top:200px;">
  <div class="row">
    <div class="col-5 offset-3">
      <form action="/create" method="post">
        @csrf
    <div class="form-group">
      <center>
       <h1> Create your post!</h1>
      </center>
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" placeholder="30 characters">
     </div>
  <div class="form-group">
    <label for="body">Title2</label>
    <input type="text" name="body" class="form-control" placeholder="25 characters">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
      <textarea class="form-control" name="description" rows="3" placeholder="120 Characters"></textarea><br>

  </div>
      <button type="submit" style ="color: green;">Submit</button>
</form>
  </div>
  </div>
  </div>

  @endsection
