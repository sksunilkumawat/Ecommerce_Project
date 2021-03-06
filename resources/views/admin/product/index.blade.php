@extends('admin.layout.admin')

@section('content')
    <h3>Products</h3>
    <ul>
        @forelse($products as $product)
    <li>
        <h4> Name of Products:{{$product->name}}</h4>
        <h4>Category:{{count($product->category)?$product->category->name:"N/A"}}</h4>

           <form action="{{route('product.destroy',$product->id)}}" method="POST">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input  class="btn btn-sm btn-danger" type="submit" value="Delete">
    </li>

            @empty
              <h4> No Products</h4>
         @endforelse

    </ul>
@endsection