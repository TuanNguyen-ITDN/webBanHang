@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <center><h1  style="    margin-top: 60px;
    color: #33fcb8;">Update products</h1></center>
        <!-- Display error -->
        @if($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
        {!! $error !!}</br>
        @endforeach

    </div>
    @endif
    <!-- //Display error -->
    <form method="post" action="{{URL::action('productController@editProduct',$product->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4>Name:</h4>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
             <input  id="cach" type="text" class="form-control" name="name" value="{!! old ('name',isset($product)?$product['name']:NULL) !!}">
         </div>
     </div>
     <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <h4>Type product:</h4>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
         <select  id="cach" class="form-control" name="id_type" >
            <option>Mời bạn chọn</option>

            @foreach($typeproduct as $cat)
            <option value="{!! $cat['id'] !!}" {!! $cat['id'] == $product['id']?'selected' : '' !!}>-- {!! $cat['name'] !!}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Description:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
     <input  id="cach" type="text" class="form-control" name="description" value="{!! old ('description',isset($product)?$product['description']:NULL) !!}">
 </div>
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Unit price:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
     <input  id="cach" type="text" class="form-control" name="unit_price" value="{!! old ('unit_price',isset($product)?$product['unit_price']:NULL) !!}">
 </div>
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Promotion prcie</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <input  id="cach" type="text" class="form-control" name="promotion_price" value="{!! old ('promotion_price',isset($product)?$product['promotion_price']:NULL) !!}">
    </div> 
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div  id="cach" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Image</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
       <input  id="cach" type="file" name="image" value="{!! isset($product)?$product['image']:NULL !!}">
       <img src="{!! asset('public/backend/images/product/'.$product['image']) !!}" width="100">
   </div> 
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Unit</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
       <input  id="cach" type="text" class="form-control" name="unit" value="{!! old ('unit',isset($product)?$product['unit']:NULL) !!}">
   </div> 
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>New</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <input id="cach" type="text" class="form-control" name="new" value="{!! old ('new',isset($product)?$product['new']:NULL) !!}">
    </div> 
</div>
<!-- button add -->
<div class="row">
    <div class="col-md-4"></div>
    <div class="form-group">
        <button type="submit"    class="btn btn-success" style="margin-left: 15px">Save</button>
    </div>
</div>
<!-- /butto add -->
</form>
</div>
</div><!-- /.container -->
</div>
@endsection
<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>

<style type="text/css">
    #cach{
        margin-top: 25px;
    }
    .row h4{
        color: red;
        margin-top: 35px;
    }
</style>