@extends('layouts.admin.admin')
@section('Conten')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<h2>Edit Menu</h2>
  <form action ="{{url('/admin/menu/update/'.$editmenu->id_menu)}}" method="POST" enctype="multipart/form-data">
      @csrf
<div class="form-group">
    <label for="name">Menu</label>
    <input type="text" class="form-control" id="text" name="text" value="{{$editmenu->text}}">
    <div class="row mt-3">
      @error('text')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="{{$editmenu->status}}">
    <div class="row mt-3">
      @error('status')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="id_user">User</label>
    <input type="text" class="form-control" id="id_user" name="id_user" value="{{$editmenu->id_user}}">
    <div class="row mt-3">
      @error('id_user')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="id_types">types</label>
    <input type="text" class="form-control" id="id_types" name="id_types" value="{{$editmenu->id_types}}">
    <div class="row mt-3">
      @error('id_types')
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
</div>
<div class="form-group">
    <label for="image">Image Menu</label>
    <div class="custom-file">
    <input type="file" class="custom-file-input" id="image" name="image" id="images">
    <label class="custom-file-label" for="image">Chiise file </label>
    </div>
    <div class="mt-4">
      <img id="showimages" src="{{asset('admin/images/'.$editmenu->image)}}" alt="" style="width:500px">
      </div>

      
    <div class="row mt-3">
      @error('image')
      <span class="text-danger">{{$message}}</span>
      @enderror
    
  </div>
</div>
    <button type="sunmit" name="submit" class="btn btn-success">Update</button>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $('#image').change(function(e){
      var reader = new FileReader();
      reader.onload = function(e){
        $('#showimages').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });

</script>

@endsection