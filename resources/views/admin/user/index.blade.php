@extends('layouts.admin.admin')
@section('Conten')



<h2>Create New User</h2>
  <form action ="" method="post" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">ID</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="ID">
</div>
<div class="form-group">
    <label for="status">Username</label>
    <input type="text" class="form-control" id="status" name="status" placeholder="Username">
</div>
<div class="form-group">
    <label for="id_user">Name</label>
    <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Name">
</div>
<div class="form-group">
    <label for="id_types">Email</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="Email">
</div>
<div class="form-group">
    <label for="id_types">Address</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="Address">
</div>
<div class="form-group">
    <label for="id_types">Phone</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="Phone">
</div>
<div class="form-group">
    <label for="id_types">Password</label>
    <input type="text" class="form-control" id="id_types" name="id_types" placeholder="Password">
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