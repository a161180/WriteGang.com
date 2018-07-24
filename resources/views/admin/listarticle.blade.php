@extends('admin.template')

@section('content')

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $article->title}}</td>
      <td>
      <a href="{{ route('admin.article.detail', $article->id )}}">
      <input type="submit" value="Details" class="btn btn-primary">
      </a>
      <!-- ctrl+/ to comment, btn detail can use <a>, not for delete and and edit need to use form -->
        <a href="{{ route('admin.article.showedit', $article->id ) }}">
          <input type="submit" value="Edit" class="btn btn-info">
        </a>
        
        <form action="{{ route('admin.article.delete', $article->id) }}" method="post">
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