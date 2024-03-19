@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<style>
body  {
  background-image: url("https://www.dynamique-mag.com/wp-content/uploads/art-de-la-To-Do-List.jpg");
}
</style>
</head>
</html>
<div>
  <div class="input-group mb-5 w-50 p-3"  >
    <div class="input-group-prepend">
      <div class="input-group-text" >
        <input type="checkbox" aria-label="Checkbox for following text input">
      </div>
    </div>
    <form action="ToDoList" method="POST">
    <input type="text" class="form-control" aria-label="Text input with checkbox" style="background-color: #ffffff;"> 
    <input type="submit" class="btn btn-outline-light"></input>
  </div>
</div>
<div class="d-flex justify-content-left flex-column w-50" >
  <button type="submit" class="btn btn-outline-dark "><a href="add">Add</a></button>
  <button type="submit" class="btn btn-outline-dark "><a href="edit">Edit</a></button>
  <button type="submit" class="btn btn-outline-dark " ><a href="delete">Delete</a></button>
</form>
</div>
@endsection