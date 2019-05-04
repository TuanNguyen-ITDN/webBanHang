@extends('layout.master')

@section('noidung')


	
<div class="container">
	
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							@if(isset($details))
							<h4>Kết quả tìm kiếm {{ $query }}</h4>

							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy {{count($details)}}</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($details as $product)
								<div class="col-sm-3">
									<div class="single-item">
										@if($product->promotion_price!=0)
											<div class="ribbon-wrapper"><div class="ribbon sale">I love you</div></div>
										@endif  
										<div class="single-item-header">
											<a style="height: 50px;" href="{{route('chitiet', $product->id)}}"><img style="height: 250px;" src="public/source/image/product/{{$product->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$product->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{$product->unit_price}}đồng</span>
												<span class="flash-sale">{{$product->promotion_price}}đồng</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $product->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitiet', $product->id)}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							 
							@endif
							
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						 
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection