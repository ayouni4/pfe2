@extends('layout.app')

@section('title')
Authentification
@endsection

@section('content')
    <!-- content -->
       
    <div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="/frontend/images/t.png" alt="" />
				</div>
				<form action="/garcon/login/traitement" method="post">
					@csrf
					<p class="legend">connection<span class="fa fa-hand-o-down"></span></p>
					<div class="input">
						<input type="email" placeholder="Email" name="email" required />
						<span class="fa fa-envelope"></span>
					</div>
					<div class="input">
						<input type="password" placeholder="Password" name="password" required />
						<span class="fa fa-unlock"></span>
					</div>
					<button type="submit" class="btn submit">
					<span class="fa fa-sign-in"></span>
					</button>
				</form>
				@if (session('status'))
				<a href="#" class="bottom-text-w3ls">{{session('status')}}</a>
				@endif

				<a href="/register" class="bottom-text-w3ls">pas encore de compte</a>
			</div>
		</div>
		<!-- //content -->
        @endsection