<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Theme</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/libraries.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
   
  </head>
  <body class="with-search-header">
    <div class="container-fluid no-padding">
      <div class="row no-margin">
        <div class="col-xs-12 no-padding">
          <header>
            <div class="search-header"><a href="{{ route ('home') }}" class="logo"><i class="music-logo"></i></a>
              <div class="input-group search-group">
                <form action="/">
                  <input type="text" name="search" placeholder="Tune Source Music" class="form-control">
                  <input type="submit" value="submit" class="hidden"><span class="input-group-btn">
                    <button type="button" class="btn"></button></span>
                </form>
              </div>
              <div class="account-icons">
                <ul>
                  <li><a href="#" class="add-to-cart"><img src="http://127.0.0.1:8000/img/login_icon.png" alt="" height="30px" width="30px">
                  <div class="account-hover-box">
                    <div class="top-count">
                      <div class="all-items">Login</div><div class="view-cart">Register</div>
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
          <form class="" action="{{ route('order.success') }}" method="POST" enctype="multipart/form-data">
          <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:30%">Song</th>
            <th style="width:20%">Email</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Total</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0 ?>
        
       
          @csrf
        <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ URL('public/thumbnail/'.$song->thumbnail) }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <input type="text" style="margin-top: 33px; width:fit-content" name="song" class="form-control quantity" value="{{ $song->name }}" readonly/> 
                            </div>
                        </div>
                    </td>
                    <td data-th="Product">
                                              
                        <input type="text" style="margin-top: 3px; width:300px" name="email" class="form-control quantity" />
                                         
                    <td data-th="Price"><input type="text" style="width:60px" name="price" value="{{ $song->price }}" class="form-control quantity" readonly/></td>
                    <td data-th="Quantity">
                        <input type="number" value="1" style="width:35px" name="quantity" class="form-control quantity" readonly />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $song->price }}</td>                    
                </tr>
          
        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <!-- <td class="text-center" style="margin: left 200px;"><strong>Total {{ $song->price }}</strong></td> -->
        </tr>
        <tr>
            <td><button class="btn btn-warning" style="padding: left 40px;">Check out</button></td>
            <td colspan="2" class="hidden-xs"></td>
            <!-- <td class="hidden-xs text-center" style="margin: left 200px;"><strong>Total ${{ $song->price }}</strong></td> -->
        </tr>
        </tfoot>
    </table>
</form>
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