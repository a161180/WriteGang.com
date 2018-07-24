@extends ('user.template')

@section('content')

  <div class="card-header">
    {{ $article->title }}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <p>
    {{ $article->content }}
    </p>
    </blockquote>
    <!-- <a href="{{ route('user.show.article') }}">
    <input type="submit" value="List Article" class="btn btn-secondary">
    </a> -->
  </div>
</div>

@endsection