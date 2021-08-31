<!DOCTYPE html>
<html>
<head>
    <title>CHEM-LAB PRACTICAL TOOL</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/d78432a841.js" crossorigin="anonymous"></script>

</head>
<body>
    <header>
        <div  class="container">
            <div id="branding">

            <h1>
                <i class="fa fa-desktop"></i>
               <span class="highlight">CHEM</span>-LAB <span class="highlight"> </span>
            </h1>
            </div>
            <nav>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="">Contact Us</a></li>
                    <li><a href="">Help</a></li>
                    @guest

                        @if (Route::has('register'))
                           <li><a href="{{route('register')}}">Register</a></li>
                        @endif

                        @if (Route::has('login'))
                          <li><a href="{{route('login')}}" class="btn1">Sign In </a></li>
                        @endif

                    @else

                    <li style="display: inline">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                     <form id="logout-form" style="display: inline" action="{{ route('logout') }}" method="POST" class="d-none">
                         @csrf
                     </form>
                    </li>

                    <li> WELCOME, {{Auth::user()->name}}</li>

                    @endguest

                </ul>

            </nav>
        </div>
    </header>
        <section>
        <div id="pictureintro">
            <div class="pictureintro">
                <h1>Teaching Practical Science: Chemistry</h1>
                <p> Discover approaches to engage 14-19 year old students through practical lessons in chemistry with this online lab for students.The key topics are: acid-base solution, balancing chemical equations,concentration pH-scale and building an atom.</p>

            <!--<a href="#"><button type="submit" id="register-link">TRY IT FREE</button></a>-->
            <!--<button  type="submit" class="btn btn1">TRY IT FREE</button>-->
            <a href="#" class="btn">TRY IT FREE</a>

            </div>

        </div>


    </section>

    <section id="subscribearea">
        <div class="container">
            <img id="interact-discover-learn" src="/images/interact-discover-learn.png" alt="INTERACT, DISCOVER, LEARN!">
    </div>

    </section>
    <section>
        <div class="midsec">
            <div class="midsectext">
                <h1>We ensure students get the most from chemistry practicals</h1>
                <p> In this course you will explore how going beyond ‘recipe following’, students can use practical work in chemistry to support explanation of theory. You’ll discover ‘microscale’ experiments to allow more students to take an active role in their learning through practical work. You will consider what’s happening in your own classroom and develop and share creative ways of studying practical chemistry with approaches that are applicable to a range of situations including some seniour high school required practicals.</p>
            </div>

        </div>


    </section>
       <section  id="midsection">
        <div class="hero-image sim-image">
            <!--<img id="hero-image" src="../chem.homepage/images/Capture7.jpg" alt="">-->

        </div>
    <section id="buttomsec">
        <div class="container">
            <div>
                <h1>What will you achieve?</h1>
            </div>
        </div>
    </section>


    <section class="biggerbox">
    <div class="container">
    <div class="subheading">
    <p>By the end of the course, you‘ll be able to....</p>


    <ul>
        <li>Improve your confidence in delivering and evaluating teaching for practical skills in chemistry for 14-16 year olds. </li>
        <li>Discuss with colleagues, try out activities and share thinking, in order to develop your teaching practice. </li>
        <li>Design progression and assessment approaches within practical work in chemistry.</li>
        <li>Reflect on the effectiveness of practical activities on every students’ learning. </li>
        <li>Develop effective learning outcomes for practical work in chemistry</li>
    </ul>
    <div>
    </div>
</section>
<section>
     <div class="buttomsection">
        <div class="main-footer">
            <div>

          <hr>
          <div id="social-footer" dir="ltr">
            <span>
              <a class="footer-link" href="http://www.facebook.com/pages" rel="external nofollow" title="Like us on Facebook" aria-label="Like us on Facebook" dir="ltr" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </span><span>
              <a class="footer-link" href="http://twitter.com" rel="external nofollow" title="Follow us on Twitter" aria-label="Follow us on Twitter" dir="ltr" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </span><span>
              <a class="footer-link" href="https://www.instagram.com" rel="external nofollow" title="Follow us on Instagram" aria-label="Follow us on Instagram" dir="ltr" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </span><span>
              <a class="footer-link" href="https://www.youtube.com" rel="external nofollow" title="Watch us on Youtube" aria-label="Watch us on Youtube" dir="ltr" target="_blank">
                <i class="fa fa-youtube-play"></i>
              </a>
            </span><span>
              <a class="footer-link" href="http://www.pinterest.com" rel="external nofollow" title="Pin us on Pinterest" aria-label="Pin us on Pinterest" dir="ltr" target="_blank">
                <i class="fa fa-pinterest-p"></i>
              </a>
            </span>
          </div>
          <hr>

      </div>
            <div id="footer-nav-links">

              <div>
                <a class="floating-link" href="#"><span>About CHEM-LAB</span></a>
                <a class="floating-link" href="#"><span>Our Team</span></a>
                <a class="floating-link" href="#"><span>Sponsors</span></a>
                <a class="floating-link" href="#"><span>Partnerships</span></a>
              </div><div>
                <a class="floating-link" href="#"><span>Offline Access</span></a>
                <a class="floating-link" href="#"><span>Help Center</span></a>
                <a class="floating-link" href="#"><span>Contact</span></a>
              </div>
              <div>
                <a class="floating-link" href="#"><span>Source Code</span></a>
                <a class="floating-link" href="#"><span>Licensing</span></a>
                <a class="floating-link" href="#"><span>For Translators</span></a>
              </div>
            </div>
     </div>

</section>
 <section>
  <div>

  </div>

 </section>

    <footer>
        <p>&copy2021,CHEM-LAB a practical tool for studying chemistry practicals</p>
    </footer>
</body>

</html>
