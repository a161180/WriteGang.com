@extends ('admin.template')

@section('content')

  <div class="card-header">
    {{ $poem->title }}
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <p>
    {{ $poem->content }}
    </p>
    </blockquote>
    <a href="{{ route('admin.show.poem') }}">
    <input type="submit" value="List Article" class="btn btn-secondary">
    </a>
  </div>
</div>

@endsection