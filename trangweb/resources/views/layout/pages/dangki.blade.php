@extends('layout.master')

@section('noidung')

<div class="container">
	<div id="content">

		<form action="{{ URL::action('LoginController@postRegister') }}" method="POST" role="form"  class="beta-form-checkout">
			{{ csrf_field() }}
			<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
			<div class="row">
				<div class="col-sm-3"></div>
				@if($errors->any())
				<div class="alert alert-danger">

					@foreach ($errors->all() as $error)
				{!! $error !!} </br>
				@endforeach

			</div>
			@endif

			@if(Session::has('thanhcong') )
			<div class="alert alert-success">{{Session::get('Thanh Cong')}}</div>
			@endif
			<div class="col-sm-6">
				<h4>Đăng kí</h4>

				<div class="space20">&nbsp;</div>


				<div class="form-block">
					<label for="email">Email address*</label>
					<input type="email" id="email" name="email" >
				</div>

				<div class="form-block">
					<label for="your_last_name">Fullname*</label>
					<input type="text" id="full_name" name="full_name" >
				</div>

				<div class="form-block">
					<label for="adress">Address*</label>
					<input type="text" id="address" name="address"  >
				</div>


				<div class="form-block">
					<label for="phone">Phone*</label>
					<input type="text" id="phone" name="phone" >
				</div>
				<div class="form-block">
					<label for="phone">Password*</label>
					<input type="password" id="password" name="password">
				</div>
				<div class="form-block">
					<label for="phone">Re password*</label>
					<input type="password" id="re_password" name="re_password">
				</div>
				<div class="form-block">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</form>
</div> <!-- #content -->
</div> <!-- .container -->
@endsection