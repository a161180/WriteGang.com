@extends('template')

@section('content')

    <div class="row mt-5">
            <div class="col-sm-4 ml-5 mb-5 mr-5">
                <div class="text-center mt-2 mb-5">
                    <h2>Famous Quote</h2>
                </div>

                <div class="card">
                    <div class="card-header">
                        The Little Pennywise
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>"Even in a dark light, im passed, if its you, then im a winner.", I said twice !</p>
                            <footer class="blockquote-footer">Page 161 in 
                                <cite title="Source Title">Jawa Post</cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>

                <div class="row mt-5">
                        <div class="card">
                                <div class="card-header">
                                    The Little Pennywise
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>"Even in a dark light, im passed, if its you, then im a winner.", I said twice !</p>
                                        <footer class="blockquote-footer">Page 161 in 
                                            <cite title="Source Title">Jawa Post</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                </div>

                <div class="row mt-5">
                        <div class="card">
                                <div class="card-header">
                                    The Little Pennywise
                                </div>
                                <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                        <p>"Even in a dark light, im passed, if its you, then im a winner.", I said twice !</p>
                                        <footer class="blockquote-footer">Page 161 in 
                                            <cite title="Source Title">Jawa Post</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                </div>

            </div>

            <div class="col-sm-5 ml-5">
                    <div class="text-center mb-5">
                <h2>The Latest</h2></div>

                @forelse ($poems AS $poem)
                <div class="row justify-content-center">
                    <div class="card mb-3">
                        <img class="card-img-top" src="IMG/2.png" alt="Card image cap">
                        <div class="card-body">
                            <a href="{{ route('poem.detail', $poem->id) }}" class="text">
                                <h5 class="card-title">{{ $poem->title }}</h5>
                            </a>
                            <a href="{{ route('poem.detail', $poem->id) }}" class="text">
                                <h7 class="card-title">
                                    <i>Mas Zaky</i>
                                </h7>
                            </a>
                            <p class="card-text">{{ $poem->content }}.</p>
                            <a href="#" class="btn btn-light">Jawa Post</a>
                        </div>
                    </div>
                </div>
               @empty
                <p>Poem is empty</p>
               @endforelse

               {{ $poems->links() }}

                
            </div>
        </div>
@endsection