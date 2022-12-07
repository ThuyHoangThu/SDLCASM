<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Theme</title>
    <link rel="stylesheet" href="css/libraries.min.css">
    <link rel="stylesheet" href="css/main.css">
   
  </head>
  <body class="with-search-header">
  @if (isset($successMsg))
            <span>
              <strong>{{$successMsg}}</strong>
            </span>
            @endif 
    <div class="container-fluid no-padding">
      <div class="row no-margin">
        <div class="col-xs-12 no-padding">
          <header>
            <div class="search-header"><a href="{{ route ('home') }}" class="logo"><i class="music-logo"></i></a>
          
              <div class="input-group search-group">
                <form action="{{ route('search') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="text" name="name" id="name" placeholder="Start your search here..." class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn"><i class="music-search"></i></button></span>
                </form>
                
              </div>
              <div class="account-icons">
                <ul>
                  <li><a href="#" class="add-to-cart"><img src="img/login_icon.png" alt="" height="30px" width="30px">
                  <div class="account-hover-box">
                    <div class="top-count">
                      <div class="all-items">Login</div><a class="view-cart" href="{{route('register')}}">Register</a>
                    </div>
                    <ul class="items">
                      <div class="signup">
                        <form action="{{route('auth.login')}}" method="POST">
                          @csrf
                          <input class="input1" type="email" name="email" placeholder="Email" required="">
                          <input class="input1" type="password" name="password" placeholder="Password" required="">
                          <button class="user-button">LOGIN</button>
                        </form>
                      </div>
                    </ul>
              </div>
              <div class="account-icons">
                  <li><a href="#" class="add-to-cart"></a>
                   
                  </li>
                  
                </ul>
              </div>
            </div>
            <div class="simple-sidebar">
              <ul>
                <li><a href="#"><img src="img/discover-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Discover</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
                <li><a href="#"><img src="img/albums-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Albums</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
                <li><a href="#"><img src="img/songs-icon.png" alt="">
                    <div class="hover-effect">
                      <div class="text">Songs</div>
                      <div class="dot"><i class="fa fa-circle"></i></div>
                    </div></a></li>
              </ul>
            </div>
          </header>
          <div class="introductory-slider">
            <ul class="slides">
              <li>
                <div style="background-image: url('content/top-background.jpg')" class="item">
                  <div class="slide-title">
                    <h3>Newest in Tune Source</h3>
                    <div class="line"><img src="img/title-underline.png" alt=""></div>
                  </div>
                  <div class="song-title">Holley Maher - I'm Coming Home</div><a href="#" data-play="12" class="play play-song">Start listening <i class="fa fa-play"></i></a><a href="#discover" class="more more-with-navigation">Discover more songs <i class="fa fa-angle-down"></i></a>
                </div>
              </li>
              
            </ul>
          </div>
          <div id="discover" class="discover-container">
            <div class="row no-margin">
              <div class="col-sm-6">
                <h6>Start to</h6>
                <h3>Discover</h3>
              </div>
              <div class="col-sm-6"><a href="#" class="view-all">View All <i class="music-plus-button"></i></a>
                <div class="songs-select">
                  <select class="select">
                    <option value="1">Songs</option>
                    <option value="2">Albums</option>
                  </select>
                </div>
              </div>
            </div>
            <script>
                      function LoginWarning(){
                        alert("Please login first!");
                      }
                      </script>
            <div class="row no-margin">
              @foreach ($songs as $song)
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img class="index-thumbnail" src="{{ URL('public/thumbnail/'.$song->thumbnail) }}" alt="">
                    
                  </figure><a href="" onclick="LoginWarning()" class="title">{{ $song->name }}</a>
                  <div class="price">${{ $song->price }}</div>
                </div>
              </div>
              @endforeach
             
            </div>
          </div>
          <div class="featured-container">
            <div class="row no-margin">
              <div class="col-sm-6">
                <h6>Featured</h6>
                <h3>Songs</h3>
              </div>
              <div class="col-sm-6"><a href="#" class="view-more">View More <i class="music-plus-button"></i></a></div>
            </div>
            <div class="row no-margin">
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-01.jpg" alt="">
                  
                  </figure><a href="individual-song.html" class="title">Always be</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-02.jpg" alt="">
                    
                  </figure><a href="individual-song.html" class="title">Perfect day</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-03.jpg" alt="">
                   
                  </figure><a href="individual-song.html" class="title">I'm coming home</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-04.jpg" alt="">
                    
                  </figure><a href="individual-song.html" class="title">Anywhere you do</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-05.jpg" alt="">
                   
                  </figure><a href="individual-song.html" class="title">You will always fin...</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
              <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="song">
                  <figure><img src="content/songs-small-06.jpg" alt="">
                   
                  </figure><a href="individual-song.html" class="title">I do</a>
                  <div class="price">$0.99</div>
                </div>
              </div>
            </div>
          </div>
          <div style="background-image: url('content/action-call-01.jpg')" class="action-call">
            <h2>The world is</h2>
            <h3>A song</h3>
            <div class="curved-lines"><img src="img/curved-lines.png" alt=""></div>
            <div class="text">So she called softly after it, 'Mouse dear! Do come back again, and we won't talk about cats or dogs either, if you don't like them!' When the Mouse heard this, it turned yes.</div>
            <button class="btn btn-default">Discover</button>
          </div>
          
          <div class="instagram-container">
            <div class="row no-margin">
              <div class="col-sm-3"><img src="img/instagram-text.png" alt=""></div>
              <div class="col-sm-9">
                <div class="instagram-list">
                  <div class="row">
                    <div class="col-sm-3"><a href="#">
                        <figure><img src="content/instagram-01.jpg" alt=""></figure></a></div>
                    <div class="col-sm-3"><a href="#">
                        <figure><img src="content/instagram-02.jpg" alt=""></figure></a></div>
                    <div class="col-sm-3"><a href="#">
                        <figure><img src="content/instagram-03.jpg" alt=""></figure></a></div>
                    <div class="col-sm-3"><a href="#">
                        <figure><img src="content/instagram-04.jpg" alt=""></figure></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- <div id="audio-player" class="audio-player">
   
</div> -->

         
         
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
                  <li><a href="about-me.html">About Tune Source</a></li>
                </ul>
              </div>
            </div>
            <div class="copyright">Developed by <a href="http://teothemes.com" target="_blank">Tune Source Music</a></div>
          </footer>
</html>