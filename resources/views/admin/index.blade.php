@extends('layouts.admin.admin')
@section('Conten')

<div class="container">
  <div class="row mt-4">
    <h3>Product</h3>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
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