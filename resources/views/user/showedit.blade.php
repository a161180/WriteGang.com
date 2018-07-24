@extends ('user.template')

@section('content')

<form action="{{ route('user.article.showeditedit', $article->id)}}" method="post">

    {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" value="{{ $article->title }}">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Content</label>
    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $article->content }}</textarea>
  </div>
  <div class="form-group">
    <input type="submit" value="Edit" class="btn btn-primary">
  </div>
  <input type="hidden" name="_method" value="Patch">

</form>

@endsection