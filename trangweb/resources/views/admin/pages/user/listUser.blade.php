@extends('admin.layouts.masterAdmin')

@section('content')
<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="bang">
                    <div class="hoc">
                    </br>
                    <h2> Danh sách user</h2> 
                     </br></br>
                </div>
                
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone number</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $value)
                            <tr>
                                <td> {!! $value["id"] !!} </td>
                                <td>{!! $value["full_name"] !!}</td>
                                <td>{!! $value["email"] !!}</td>
                                <td>{!! $value["phone"] !!}</td>
                                <td>{!! $value["address"] !!}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    
                </table>
            </div><!-- /.bang -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container -->
</div>
@endsection
<div id="morris-area-chart" style="display: none;"></div>
<div id="morris-bar-chart" style="display: none;"></div>
<div id="morris-donut-chart" style="display: none;"></div>