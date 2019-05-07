<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
					@if(Auth::check())
						<li><a href="#">Chao ban {{Auth::user()->full_name}}</a></li>
						<li><a href="{{route('logout')}}">Dang Xuat </a></li>
					@else
						<li><a href="{{route('dangki')}}">Đăng kí</a></li>
						<li><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
					@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trang-chu')}}" id="logo"><img src="public/source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="POST" id="searchform" action="{{URL::to('/search')}}">
							{{ csrf_field() }}
							<input type="text" value="" name="product_search" id="product_search" placeholder="Nhap tu khoa.."/>
							<button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<!-- dang code o dong nay -->
					<div class="beta-comp">										
						@if(Session::has('cart'))										
						<div class="cart">									
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trong @endif) <i class="fa fa-chevron-down"></i></div>								
							<div class="beta-dropdown cart-body">								
								
								@foreach($product_cart as $product)							
								<div class="cart-item" id="cart-item{{$product['item']['id']}}">						
									<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['id'])}}" value="{{$product['item']['id']}}" soluong="{{$product['qty']}}"><i class="fa fa-times"></i></a>						
									<div class="media">
										<a class="pull-left" href="#"><img src="public/source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['name']}}</span>
											<span class="cart-item-options">{{$product['item']['qty']}}Giá: <span id="donggia{{$product['item']['id']}}" value="@if($product['item']['promotion_price']==0){{($product['item']['unit_price'])}}@else{{($product['item']['promotion_price'])}}@endif">@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}}@else{{number_format($product['item']['promotion_price'])}}@endif</span></span>
											 
										</div>
									</div>					
								</div>							
								@endforeach							
								
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value" value="@if(Session::has('cart')){{($totalPrice)}}@else 0 @endif">@if(Session::has('cart')){{number_format($totalPrice)}}@else 0 @endif đồng </span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>						
							</div>								
						</div> <!-- .cart -->									
						@endif
					</div>
				</div>

				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #031b52;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}" style="background: #031b52;">Trang chủ</a></li>
						<!-- đường dẫn trở về trang chủ khi chúng ta kích vào trang chủ -->
						<li><a href="{{route('trang-chu')}}" style="background: #031b52;"> Loại Sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
								<!-- đường dẫn trở về trang chủ khi chúng ta kích vào sản phẩm (loại sản phẩm) -->
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('about')}}" style="background: #031b52;">Giới thiệu</a></li>
						<!-- đường dẫn trở về trang chủ khi chúng ta kích vào giới thiệu -->
						<li><a href="{{route('lienhe')}}" style="background: #031b52;">Liên hệ</a></li>
						<!-- đường dẫn trở về trang chủ khi chúng ta kích vào liên hệ -->
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->