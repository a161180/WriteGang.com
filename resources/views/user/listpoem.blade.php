@extends('user.template')

@section('content')

<a href="{{ route('user.submit.poem')}}">
  <input type="submit" value="Add New Poem" class="btn btn-primary btn-lg btn-block">
</a>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($poems as $poem)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $poem->title}}</td>
      <td>

        <a href="{{ route('user.poem.detail', $poem->id )}}">
            <input type="submit" value="Details" class="btn btn-primary">
        </a>

        <a href="{{ route('user.poem.showedit', $poem->id ) }}">
          <input type="submit" value="Edit" class="btn btn-info">
        </a>

        <form action="{{ route('user.poem.delete', $poem->id) }}" method="post">
          {{ csrf_field() }}
          <input type="submit" value="Delete" class="btn btn-danger">
          <input type="hidden" name="_method" value="Delete" class="btn btn-danger">
        </form>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection