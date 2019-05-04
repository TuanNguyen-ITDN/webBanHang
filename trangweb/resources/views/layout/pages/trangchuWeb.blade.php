@extends('layout.master')

@section('noidung')


	
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản phẩm mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($new_product)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($new_product as $new)
								<div class="col-sm-3">
									<div class="single-item">
										@if($new->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">I love you</div></div>
										@endif  
										<div class="single-item-header">
											<a style="height: 50px;" href="{{route('chitiet', $new->id)}}"><img style="height: 250px;" src="public/source/image/product/{{$new->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$new->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{$new->unit_price}}đồng</span>
												<span class="flash-sale">{{$new->promotion_price}}đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a  class="add-to-cart pull-left" href="{{route('themgiohang', $new->id)}}" data-toggle="tooltip" data-placement="top" title="Add to cart  !"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet', $new->id)}}" data-toggle="tooltip" data-placement="bottom" title="More Detail  !">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$new_product->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm được ưa chuộng</h4>
							<div class="beta-products-details">
								<p class="pull-left"> Tìm thấy {{count($sanpham_khuyenmai)}}</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sanpham_khuyenmai as $spkm)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitiet', $spkm->id)}}"><img  style="height: 250px;" src="public/source/image/product/{{$spkm->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spkm->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{number_format($spkm->unit_price)}}đồng</span>
												<span class="flash-sale">{{number_format($spkm->promotion_price)}}đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $spkm->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet', $spkm->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
 							<div class="row">{{$sanpham_khuyenmai->links()}}</div>
								 
							 
							</div>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection