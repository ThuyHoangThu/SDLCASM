<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Theme</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/libraries.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                var nric = $('#text').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
    </script>
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
                      <div class="all-items"></div>
                      <a href="{{ route ('home')}}" class="view-cart">Logout</a>
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
          <div align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                            <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                            <h2 style="font-size: 20px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                Tune Source Thank You For Your Purchase! 
                                <br>
                                An order confirmation email has been sent to your mailbox. 
                                <br> Please find your Order ID in the email to get the download link.
                                <br>
                            </h2>
                            <br>
                            <input id="text" type="text" class="input-center"
            value="" placeholder="Enter your Order ID here to generate your QR code!" style="Width:25%; text-aligned:center;"
            onblur='generateBarCode();' /> 
<Br>
<br>
<br>
      <img id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" 
            alt="" 
            title="HELLO" 
            width="100" 
            height="100" />
</div>
<br>
<br>
<br>
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