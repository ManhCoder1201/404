@extends('admin.dashboard')
@section('title','mng Product')
@section('content')
<div class="row">
  <div class="col-10">
    <h2>Product List</h2>
  </div>
  <div class="col-2">
    <a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>Category</th>
        <th>Supplier</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody id="product_list">
      @foreach($product as $pro)
        <tr>
        <td>{{$pro->productName}}</td>
        
        <td><img style="width: 50px; heigh:100px" src="images/{{$pro->productImage}}" alt=""></td>
        <td>{{$pro->productDescription}}</td>
        <td>{{$pro->supplierName}}</td>
        <td></td>
        <td></td>
        <td>{{$pro->productPrice}}</td>
        <td><a class="btn btn-sm btn-info">Edit</a><a class="btn btn-sm btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@include('admin.management.mngProduct')
@stop
