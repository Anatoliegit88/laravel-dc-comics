@extends('layouts.app');

@section('title' , 'Modify');

@section('content')

<div class="container">
  <h2>All Comics {{$comic->thumb}} </h2>
  <div class="row">
    <div class="col">
      <form action="">

        <div>
          <label for="image">Image</label>
          <input class="form-control" type="text" id="image" name="image" value="{{ $comic->thumb }}">
        </div>

        <div>
          <label for="title">Title</label>
          <input class="form-control" type="text" name="title" id="title" value="{{ $comic->title }}">
        </div>

        <div>
          <label for="description">Description</label>
          <input class="form-control" type="text" id="description" name="description" value="{{ $comic->description }}">
        </div>
      </form>
    </div>
  </div>
</div>
    
@endsection
    

