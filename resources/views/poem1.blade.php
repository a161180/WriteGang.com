@extends('template')

@section('content')


        <div class="row justify-content-center mt-5">
        
            <div class="col-sm-5 ml-5">
                    <div class="text-center mb-5">
                <h2>The Latest</h2></div>
                <div class="row justify-content-center">
                    <div class="card mb-3">
                        <img class="card-img-top" src="{{ url('/IMG/2.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <a href="#" class="text">
                                <h5 class="card-title">{{ $poem->title }}</h5>
                            </a>
                            <a href="#" class="text">
                                <h7 class="card-title">
                                    <i>Mas Zaky</i>
                                </h7>
                            </a>
                            <p class="card-text">
                                   {{ $poem->content }}
                            </p>
                            <a href="#" class="btn btn-light">Jawa Post</a>
                        </div>
                    </div>
                </div>
                


                
            </div>
        </div>

@endsection