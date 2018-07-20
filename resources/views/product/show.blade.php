@extends('layouts.layout')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">Detail Product</div>
            </div>
            <div class="panel-body">
                <div>{{ $product->title }}</div>
                <div>{{ $product->description }}</div>
                <div>{{ $product->availability }}</div>
                <div>{{ $product->price }}</div>
            </div>
        </div>
    </div>
@endsection