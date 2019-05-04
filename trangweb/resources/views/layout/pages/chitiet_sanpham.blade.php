@extends('layout.master')

@section('noidung')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Product</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				<a href="{{route('trang-chu')}}">Home</a> / <span>Product</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<div class="row">

			<div class="col-sm-9">
				@foreach($detail as $ct)
				<div class="row">
					<div class="col-sm-4">
						<img src="public/source/image/product/{{$ct->image}}" alt="">
					</div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title">{{$ct->name}}</p>
							<p class="single-item-price">
								<span>{{$ct->unit_price}}  đ</span>
							</p>
						</div>

						<div class="clearfix"></div>
						<div class="space20">&nbsp;</div>

						<div class="single-item-desc">
							<p>{{$ct->description}}</p>
						</div>
						<div class="space20">&nbsp;</div>

						<p>Options:</p>
						<div class="single-item-options">
							<select class="wc-select" name="size">
								<option>Size</option>
								<option value="XS">XS</option>
								<option value="S">S</option>
								<option value="M">M</option>
								<option value="L">L</option>
								<option value="XL">XL</option>
							</select>
							<select class="wc-select" name="color">
								<option>Color</option>
								<option value="Red">Red</option>
								<option value="Green">Green</option>
								<option value="Yellow">Yellow</option>
								<option value="Black">Black</option>
								<option value="White">White</option>
							</select>
							<select class="wc-select" name="color">
								<option>Qty</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
							</select>
							<a class="add-to-cart" href="{{route('themgiohang', $ct->id)}}"><i class="fa fa-shopping-cart"></i></a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
				@endforeach
				<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
					<ul class="tabs">
						<li><a href="#tab-description">Description</a></li>
						<li><a href="#tab-reviews">Reviews (0)</a></li>
					</ul>

					<div class="panel" id="tab-description">
						<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
						<p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
					</div>
					<div class="panel" id="tab-reviews">
						<p>No Reviews</p>
					</div>
				</div>
				<div class="space50">&nbsp;</div>
				<div class="beta-products-list">
					<h4>Sản phẩm có liên quan</h4>

					<div class="row">
						@foreach($related as $re)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="{{route('chitiet', $re->id)}}"><img style="height: 200px;" src="public/source/image/product/{{$re->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$re->name}}</p>
									<p class="single-item-price">
										<span>{{$re->unit_price}} đ</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div> <!-- .beta-products-list -->
			</div>
			<div class="col-sm-3 aside">
				<div class="widget">
					<h3 class="widget-title">Sản phẩm bán chạy nhất</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							@foreach($sp_sell as $bc)
							<div class="media beta-sales-item">
								<a class="pull-left" href="{{route('chitiet',$bc->id)}}"><img src="public/source/image/product/{{$bc->image}}" alt=""></a>
								<div class="media-body">
									{{$bc->name}}
									<span class="beta-sales-price">{{$bc->unit_price}} đ</span>
								</div>
							</div>
							 @endforeach
							 
						</div>
					</div>
				</div> <!-- best sellers widget -->
				<div class="widget">
					<h3 class="widget-title">New Products</h3>
					<div class="widget-body">
						<div class="beta-sales beta-lists">
							@foreach($newproduct as $np)
							<div class="media beta-sales-item">
								<a class="pull-left" href="{{route('chitiet', $np->id)}}"><img src="public/source/image/product/{{$np->image}}" alt=""></a>
								<div class="media-body">
									{{$np->name}}
									<span class="beta-sales-price">{{$np->unit_price}} đ</span>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div> <!-- best sellers widget -->
			</div>
		</div>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection