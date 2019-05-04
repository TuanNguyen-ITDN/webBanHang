@extends('layout.master')

@section('noidung')
 
	<div class="container">
		<div id="content">
			
			<form action="{{URL('backend/dangnhap')}}" role="form" method="POST" class="beta-form-checkout">
				{!! csrf_field() !!}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						@if($errors->has('errorlogin'))
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{$errors->first('errorlogin')}}
						</div>
						@endif
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
							@if($errors->has('email'))
							<p style="color:red;margin-left: 201px;">{{$errors->first('email')}}</p>
							@endif
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" class="form-control" id="password" placeholder="Password" name="password">
							@if($errors->has('password'))
								<p style="color:red;margin-left: 201px;">{{$errors->first('password')}}</p>
							@endif
						</div>
						
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection