@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #7a09ff;" class="page-header">List of Products</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        @if($errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
        {!! $error !!} </br>
        @endforeach

    </div>
    @endif
    <form   action="{{ URL::action('PageController@postAdd') }}" enctype="multipart/form-data" method="POST" role="form" class="form-horizontal registration-form" >
        {{ csrf_field() }}
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />


        <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h4>Product's name:</h4>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
               <input  id="cach" value="{{old('name')}}" type="text" class="form-control" name="name" placeholder="Enter product's name">
           </div>
       </div>
       <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <h4>Product's type:</h4>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
           <select  class="form-control"  value="{{old('name')}}" name="id_type" id="cach">
            <option value="">Mời bạn chọn:</option>
            <!-- $category trong hàm getAdd của file ProductsController -->
            @foreach($typeproduct as $type)
            <option value="{!! $type['id']!!}"> {!! $type['name'] !!}</option>
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
       <input  id="cach" type="text" class="form-control" name="description" placeholder="Enter product's code" value="{{old('description')}}">
   </div>
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Unit price:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
       <input  type="text" class="form-control" id="cach" name="unit_price" placeholder="Enter price" value="{{old('unit_price')}}">
   </div>
</div>




<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Promotion price:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <input type="text" class="form-control" id="cach" name="promotion_price" placeholder="Enter price" value="{{old('promotion_price')}}">
    </div>



</div>

<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Image:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <input   id="cach" type="file"   name="image" value="{{old('image')}}">
    </div>
</div>

<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>Unit:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
        <input type="text" class="form-control" id="cach" name="unit" placeholder="Enter old  price" value="{{old('unit')}}">
    </div>
</div>
<div class="row">
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <h4>New:</h4>
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
     <input  type="text" class="form-control" id="cach" name="new" placeholder="Enter old  price" value="{{old('new')}}">
 </div>
</div>


<center>
    <button type="submit" class="btn btn-primary">OK</button>
    <button type="Reset" class="btn btn-danger">Nhập lại</button>
</center>
</form>

</div>

</div>

</div>

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