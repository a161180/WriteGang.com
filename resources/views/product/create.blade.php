@extends('layouts.layout')
@section('content')
    <form action="{{ route('store') }}" method="post" style="text-align: center; padding: 50px;">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" name="title" placeholder="Title">
        </div>
        <br>
        <div class="form-group">
            <textarea class="form-control" name="description">Place Description here</textarea>
        </div>
        <br>
        <div class="form-group">
            <select class="form-control" name="availability">
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
        </div>
        <br>
        <div class="form-group">
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit">
        </div>
    </form>
@endsection