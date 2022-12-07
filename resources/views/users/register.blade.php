<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Theme</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/libraries.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/login.css">
   
  </head>
  <body class="with-search-header">
    <div class="container-fluid no-padding">
      <div class="row no-margin">
        <div class="col-xs-12 no-padding">
          <header>
            <div class="search-header"><a href="{{ route ('home') }}" class="logo"><i class="music-logo"></i></a>
              <div class="input-group search-group">
                <form action="/">
                  <input type="text" name="search" placeholder="Start your search here..." class="form-control">
                  <input type="submit" value="submit" class="hidden"><span class="input-group-btn">
                    <button type="button" class="btn"><i class="music-search"></i></button></span>
                </form>
              </div>
              <div class="account-icons">
                <ul>
                  <li><a href="#" class="add-to-cart"><img src="http://127.0.0.1:8000/img/login_icon.png" alt="" height="30px" width="30px">
                  <div class="account-hover-box">
                  <div class="top-count">
                     
                    </div>
                    
              </div>
              <div class="account-icons">
                  <li><a href="#" class="add-to-cart"></a>
                    
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="simple-sidebar">
              <ul>
                <li><a href="#"><img src="http://127.0.0.1:8000/img/discover-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Discover</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
                <li><a href="#"><img src="http://127.0.0.1:8000/img/albums-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Albums</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
                <li><a href="#"><img src="http://127.0.0.1:8000/img/songs-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Songs</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
              </ul>
            </div>
          </header>
          <div class="wrapper-login"> 	
    <div class="main"> 		

			<div class="signup">
				<form action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
					<label for="chk" aria-hidden="true">Sign up</label>
                    <input class="input1" type="email" name="email" placeholder="Email" required="">
					<input  class="input1"  type="password" name="password" placeholder="Password" required="">
					<input  class="input1"  type="text" name="name" placeholder="Name" required="">
                    
					
					<button class="admin-login">Sign up</button>
				</form>
			</div>
            
	</div>
</div>
          
        
  </body>
  <footer class="main-footer">
            <div class="row no-margin">
              <div class="col-md-2 col-sm-1">
                <div class="footer-logo footer-widget"><i class="music-logo"></i></div>
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="footer-text footer-widget footer-border-right">
                  <div class="text">
                    Music is a nice way to showcase your
                    artistic side or your band. But if that's
                    not for you - launch a web app and let
                    people buy & listen music from you!
                  </div>
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-vine"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="footer-newsletter footer-widget footer-border-right">
                  <h6>Sign up for our</h6>
                  <h3>Newsletter</h3>
                  <div class="input-group">
                    <form action="/">
                      <input type="email" name="newsletter-email" placeholder="E-mail" class="form-control">
                      <input type="submit" value="submit" class="hidden">
                    </form><i class="fa fa-envelope-o"></i>
                  </div>
                </div>
              </div>
              <div class="col-sm-3">
                <ul class="footer-links footer-widget">
                  <li><a href="merchendise.html">Merchandise</a></li>
                  <li><a href="#">iTunes</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="about-me.html">About me</a></li>
                </ul>
              </div>
            </div>
            <div class="copyright">Developed by <a href="http://teothemes.com" target="_blank">Tune Source Music</a></div>
          </footer>
</html>
    


    <!-- <form action="{{route('auth.register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="box">
            <h1>Welcome to BTEC FPT</h1>
            <table class="table">
                <tr>
                    <td for="email" class="label">Email</td>
                    <td><input type = "email" name ="email" class="email" value="" placeholder="mulie@btec.fpt.edu.vn" required></td>
                </tr>
                <tr>
                    <td class="label" for="password">Password</td>
                    <td><input type = "password" name="password" class="password" value="" required></td>
                </tr>
                <tr>
                    <td for="lastname" class="label">Name</td>
                    <td><input type = "text" name ="name" class="name" value="" placeholder="Mulie" required></td>
                </tr>
                <tr>
                    <td class="label" for="address">Address</td>
                    <td><input type = "address" class="address" value="" required></td>
                </tr>
            </table class="table">
            <button type=submit class="btn">Register</button>
            <div class="btn3"><a href="{{route('login')}}">Already Registered?</a></div>
        </div>
    </form> -->
 
   <!-- Sau đó tạo 1 file css trong thư mục TEST/public/css
Link đường dẫn file css đến file HTML -->