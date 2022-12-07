<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Music Theme</title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/libraries.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/main.css">
   
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
                      <div class="all-items">Welcome {{ $user }}</div>
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
          <div style="background-image: url('http://127.0.0.1:8000/content/introductory-slider-01.jpg')" class="song-top-container">
            <div class="row no-margin">
              <div class="col-lg-8 col-md-7 col-sm-6 no-padding">
                <div class="song-main-container">
                  <div> <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/{{$song->song_url}}?utm_source=generator" width="50%" height="200px" frameBorder="0" opacity="70%" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    <br>
                    <br></div>
                  <hr>
                  <div class="song-icons">
                    <div class="icon"><a href="{{ route('cart.checkout', $song->id) }}"><button class="add-to-cart-button" >
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px"
     height="20px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
        <g class="base">
            <polygon fill="transparent" stroke="#231F20" stroke-width="2" stroke-miterlimit="10" points="35.818,37 14,37 15.091,16 35,16 	">
                <animate attributeType="XML" class="animate-first added-animate-first" attributeName="points" from="35.818,37 14,37 15.091,16 35,16 	" to="34.818,36 15,36 16.091,15 34,15" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                <animate attributeType="XML" class="animate-second added-animate-second" attributeName="points" from="34.818,36 15,36 16.091,15 34,15" to="35.818,37 14,37 15.091,16 35,16 	" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
            </polygon>
            <rect x="17" y="13" fill="transparent" stroke="#231F20" stroke-width="2" stroke-miterlimit="10" width="16" height="3">
                <animate attributeType="XML" class="animate-first added-animate-first" attributeName="x" from="17" to="18" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                <animate attributeType="XML" class="animate-second added-animate-second" attributeName="x" from="18" to="17" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                <animate attributeType="XML" class="animate-first added-animate-first" attributeName="y" from="13" to="11" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                <animate attributeType="XML" class="animate-second added-animate-second" attributeName="y" from="11" to="13" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                <animate attributeType="XML" class="animate-first added-animate-first" attributeName="width" from="16" to="14" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                <animate attributeType="XML" class="animate-second added-animate-second" attributeName="width" from="14" to="16" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                <animate attributeType="XML" class="animate-first added-animate-first" attributeName="height" from="3" to="4" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                <animate attributeType="XML" class="animate-second added-animate-second" attributeName="height" from="4" to="3" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
            </rect>
        </g>
        <g class="plus">
                <line class="first" fill="white" stroke="#231F20" stroke-width="2" stroke-miterlimit="10" x1="25" y1="22" x2="25" y2="30">
                    <animate class="animate-second" attributeName="x1" from="25" to="20" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="y1" from="22" to="26" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="x2" from="25" to="23.828" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="y2" from="30" to="29.828" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                    <animate class="animate-third" attributeName="x1" from="20" to="22.5" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="y1" from="26" to="24" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="x2" from="23.828" to="28.5" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="y2" from="29.828" to="30" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                    <animate class="added-animate-first" attributeName="x1" from="22.5" to="25" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="y1" from="24" to="22" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="x2" from="28.5" to="25" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="y2" from="30" to="30" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                </line>
                <line class="second" fill="white" stroke="#231F20" stroke-width="2" stroke-miterlimit="10" x1="21" y1="26" x2="29" y2="26">

                    <animate class="animate-first" attributeName="x2" from="29" to="31" begin="indefinite" dur="0.1s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                    <animate class="animate-second" attributeName="x1" from="21" to="23.465" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="y1" from="26" to="29.535" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="x2" from="31" to="31" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-second" attributeName="y2" from="26" to="23" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                    <animate class="animate-third" attributeName="x1" from="23.465" to="22.5" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="y1" from="29.535" to="30" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="x2" from="31" to="28.5" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="animate-third" attributeName="y2" from="23" to="24" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />

                    <animate class="added-animate-first" attributeName="x1" from="22.5" to="21" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="y1" from="30" to="26" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="x2" from="28.5" to="29" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                    <animate class="added-animate-first" attributeName="y2" from="24" to="26" begin="indefinite" dur="0.2s" fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
                </line>
        </g>
    </svg>
</button></a>

                      <div class="text">${{$song->price}}</div>
                    </div>
                    <div class="icon"><button class="add-to-wishlist-button">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px"
	 height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
		<g id="top">
			<path fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M32.584,20.462
				c1.396-1.46,2.161-3.374,2.161-5.39c0-4.288-3.476-7.777-7.744-7.777c-2.44,0-4.681,1.143-6.126,3.018h-0.007
				c-1.444-1.875-3.683-3.018-6.124-3.018C10.476,7.295,7,10.784,7,15.072c0,2.016,0.765,3.93,2.161,5.39l5.058,4.882">
				
				<animate class="animate-first" attributeName="d" 
					from="M32.584,20.462
						c1.396-1.46,2.161-3.374,2.161-5.39c0-4.288-3.476-7.777-7.744-7.777c-2.44,0-4.681,1.143-6.126,3.018h-0.007
						c-1.444-1.875-3.683-3.018-6.124-3.018C10.476,7.295,7,10.784,7,15.072c0,2.016,0.765,3.93,2.161,5.39l5.058,4.882" 
					to="
						M30.883,20.732c1.396-1.459,2.161-3.375,2.161-5.39c0-4.288-3.476-7.777-7.744-7.777c-2.44,0-4.68,1.143-6.126,3.018h-0.007
						c-1.444-1.875-3.683-3.018-6.124-3.018c-4.268,0-7.744,3.489-7.744,7.777c0,2.016,0.766,3.93,2.161,5.39l5.058,4.883" 
					begin="indefinite" 
					dur="0.1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
				<animate class="added-animate-first" attributeName="d" 
					from="
						M30.883,20.732c1.396-1.459,2.161-3.375,2.161-5.39c0-4.288-3.476-7.777-7.744-7.777c-2.44,0-4.68,1.143-6.126,3.018h-0.007
						c-1.444-1.875-3.683-3.018-6.124-3.018c-4.268,0-7.744,3.489-7.744,7.777c0,2.016,0.766,3.93,2.161,5.39l5.058,4.883" 
					to="M32.584,20.462
						c1.396-1.46,2.161-3.374,2.161-5.39c0-4.288-3.476-7.777-7.744-7.777c-2.44,0-4.681,1.143-6.126,3.018h-0.007
						c-1.444-1.875-3.683-3.018-6.124-3.018C10.476,7.295,7,10.784,7,15.072c0,2.016,0.765,3.93,2.161,5.39l5.058,4.882" 
					begin="indefinite" 
					dur="0.1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
			</path>
		</g>
		<g id="base">
			<path fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M32.639,20.403
				L20.902,31.941l0,0l-6.774-6.69">			
				<animate class="animate-first" attributeName="d" 
					from="M32.639,
							20.403
						  L20.902,
						  31.941l0,
						  0l-6.774-6.69" 
					to="M27.451,
					24.119l-8.25,
					8.094l0,
					0l-3.337-3.285" 
					begin="indefinite" 
					dur="0.1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
				 <animate class="animate-second smooth" attributeName="d" 
					from="M27.451,
						24.119l-8.25,
						8.094l0,
						0l-3.337-3.285" 
					to="M24.473,
						27.098l-5.271,
						5.115l0,
						0" 
					begin="indefinite" 
					dur="1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />	
					
				<animate class="added-animate-first" attributeName="d" 
					from="M24.473,27.098l-5.271,5.115l0,0" 
					to="M32.639,20.403
						L20.902,31.941l0,0l-6.774-6.69" 
					begin="indefinite" 
					dur="1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
			</path>
			<path fill="none" stroke="#000000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M32.639,20.403
				L20.902,31.941l0,0l-6.774-6.69">			
				<animate class="animate-first" attributeName="d" 
					from="
						M32.639,20.403
						L20.902,31.941l0,0l-6.774-6.69" 
					to="M27.451,24.119l-8.25,8.094l0,0l-3.337-3.285" 
					begin="indefinite" 
					dur="0.1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />
				 <animate class="animate-second" attributeName="d" 
					from="M27.451,24.119l-8.25,8.094l0,0l-3.337-3.285" 
					to="M19.201,27.098l5.271,5.115l0,0" 
					begin="indefinite" 
					dur="1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />						
				<animate class="added-animate-first" attributeName="d" 
					from="M19.201,27.098l5.271,5.115l0,0" 
					to="M32.639,20.403
						L20.902,31.941l0,0l-6.774-6.69" 
					begin="indefinite" 
					dur="1s" 
					fill="freeze" calcMode="spline" keySplines="0.5 0 0.5 0" />	
			</path>
		</g> 
	</svg>
</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-5 col-sm-6 no-padding">
                <div class="song-second-container">
                  <ul class="song-info-list">
                    <li>
                      <h4>Released</h4>
                      <div class="info">{{ $song->release }}</div>
                      <hr>
                    </li>
                    <li>
                      <h4>Genres</h4>
                      <div class="info">{{ $song->genres }}</div>
                      <hr>
                    </li>
                    <li>
                      <h4>Instruments</h4>
                      <div class="info">
                        {{ $song->instrument }}
                      </div>
                      <hr>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="buy-container">
            <ul class="buy-icons">
              <li><a href="#"><i class="fa fa-spotify"></i></a></li>
              <li><a href="#"><i class="fa fa-apple"></i></a></li>
              <li><a href="#"><img src="http://127.0.0.1:8000/content/amazon-icon.png" alt=""></a></li>
              <li><a href="#"><img src="http://127.0.0.1:8000/content/beatbot-icon.png" alt=""></a></li>
            </ul>
          </div>
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