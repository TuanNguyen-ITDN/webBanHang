@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="bang">
                    <div class="hoc">
                    </br>
                    <h2> Danh sách sản phẩm vừa nhập</h2> 
                     </br></br>
                </div>
                <input class="form-control" id="myInput" type="text" placeholder="Search.."></br>
                <table  class="table table-striped table-bordered table-hover">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Id type</th>
                                <th>Description</th>
                                <th>Unit price</th>
                                <th>Promotion price</th>
                                <th>Image</th>  
                                <th >Unit</th>
                                <th >New</th>
                                <th >Tools</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            @foreach($product as $value)
                            <tr>
                                <td> {!! $value["id"] !!} </td>
                                <td>{!! $value["name"] !!}</td>
                                <td>{!! $value["id_type"] !!}</td>
                                <td>{!! $value["description"] !!}</td>
                                <td>{!! $value["unit_price"] !!}</td>
                                <td>{!! $value["promotion_price"] !!}</td>
                                <td>
                                    <img src="{!! asset('public/backend/images/product/'.$value["image"]) !!}" width="100" alt="{!! $value["name"] !!}">
                                </td>
                                <td>{!! $value["unit"] !!}</td>
                                <td>{!! $value["new"] !!}</td>
                                <td>    
                                    <a href="{!! url('backend/addProduct') !!}"><i class="fa fa-plus-circle"></i>&nbsp;Thêm</a>&nbsp;&nbsp; <!-- Goi dia chi trong route -->
                                    <a href="{!! url('backend/editProduct',$value["id"]) !!}"><i class="fa fa-pencil"></i>&nbsp;Sửa</a>&nbsp;&nbsp;
                                    <a href="{!! url('backend/deleteProduct',$value["id"]) !!}"><i class="fa fa-trash"></i>&nbsp;Xóa</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    
                </table>
            </div><!-- /.bang -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container -->
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>