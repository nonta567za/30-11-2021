@extends('layouts.admin.admin')
@section('Conten')



<h2>Create New Menu</h2>
  <form action ="{{route('create')}}" method="post" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Menu</label>
    <input type="text" class="form-control" id="text" name="text" placeholder="Menu name">
    <div class="row mt-3">
      @error('text')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="status">
    <div class="row mt-3">
      @error('status')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="id_user">User</label>
    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="id_user">
    <div class="row mt-3">
      @error('id_user')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="id_types">types</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="id_types">
    <div class="row mt-3">
      @error('id_types')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="image">Image Menu</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image">
    <label class="custom-file-label" for="image">Chiise file </label>
    <div class="row mt-3">
      @error('image')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
</div>
    <button type="sunmit" name="submit" class="btn btn-success">Submit</button>
</form>

<div class="container">
  <div class="row mt-4">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Created_at</th>
      <th scope="col">Updated_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>
        <a href="" class="btn btn-success">Edit</a>
        <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    
  </tbody>
</table>
  </div>
</div>
@endsection