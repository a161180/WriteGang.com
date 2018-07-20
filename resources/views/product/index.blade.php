@extends('layouts.layout')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title">List of Products</div>
                <div class="panel-title" style="text-align: right">
                    <a href="{{ route('create') }}" class="btn btn-default">Add new product</a>
                </div>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Availability</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($products as $key => $product)
                        <tr>
                            <td>
                                @php
                                    echo $no;
                                    $no++;
                                @endphp
                            </td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->availability }}</td>
                            <td>{{ $product->price }}</td>
                            <td><a href="{{ route('show',$product->id) }}" class="btn btn-primary">Detail</a>
                            </td>
                            <td><a href="{{ route('edit',$product->id) }}" class="btn btn-warning">Edit</a></td>
                            <td>
                                <form method="post" action="{{ route('delete',$product->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection