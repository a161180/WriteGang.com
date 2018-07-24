@extends('user.template')
@section('content')

<form action="{{ route('user.poem.process' )}}" method="post">

    {{ csrf_field() }}
  <div class="form-group">
  <h2>Add New Poem Here</h2>
  <h2></br></h2>
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" value="Submit" class="btn btn-primary">
  </div>
  <!-- <input type="hidden" name="_method" value="Patch" > -->

</form>

@endsection