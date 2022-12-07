<!-- Tạo thành công file btec.blade.php trong thư mục resources/views/BTEC
 -->
 <!-- Sử dụng phần code HTML để tạo view -->
@extends('admin/layout')
@section('content')
    @if (session('message'))
    <span class="aler alert-danger">
        <strong>{{session('message')}}</strong>
    </span>     
    @endif

<section>
    
<div class="wrapper-login"> 	
    <div class="main"> 
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
                <form action="{{route('auth.login')}}" method="POST">
                    @csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button class="admin-login">Login</button>
				</form>
				
			</div>
            <br>
			<div class="login">
                <form action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<label for="chk" aria-hidden="true">Sign Up</label>
                    <input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<input type="text" name="name" placeholder="Name" required="">
					<button class="admin-login">Sign up</button>
				</form>
			</div>
	</div>
</div>
<br>
<br>
</section>
@endsection
   <!-- Sau đó tạo 1 file css trong thư mục TEST/public/css
Link đường dẫn file css đến file HTML -->