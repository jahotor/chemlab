<!DOCTYPE html>
<html>
<head>
    <title>CHEM-LAB PRACTICAL TOOL</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://kit.fontawesome.com/d78432a841.js" crossorigin="anonymous"></script>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

</head>
<body>
    <header>
        <div  class="container" >
            <div id="branding">
                <a class="highlight" href="{{route('index')}}">

            <h1>
              <i class="fa fa-desktop"></i>
               <span class="highlight">CHEM</span>-LAB <span class="highlight">

               </span>
            </h1>
        </a>

            </div>

        <nav>

            <ul>
                            <li class="dropdown">
                                <a class="dropdown-btn" href="#">MENU</a>
                            <div class="dropdown-menu">
                                    <a href="{{route('home')}}">Home</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Help</a>
                                    <a href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Log Out</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                </li>
            </ul>

            </nav>
        </div>
    </header>
        <section>
            <div class="container">
            <div class="pictureintro">
               <h1>STIMULATIONS</h1>
               <p>Welcome home</p>
            </div>
            </div>
        </section>
        <section class="events" >
            <div class="container">
                <div class="row">
                    <div class="col">
                        <img src="/images/acid-base-solutions.png" alt="">
                        <h4>Acid-base-solutions practical </h4>
                        <p>Do acid base tests</p>
                        <a href="{{route('acid_base')}}" width="800" height="600" scrolling="no" allowfullscreen class="btn">Learn more</a>
                    </div>
                    <div class="col">
                        <img src="/images/concentration.png" alt="">
                        <h4>Concentration practical </h4>
                        <p>work on it</p>
                        <a href="{{route('concentration')}}" width="800" height="600" scrolling="no" allowfullscreen class="btn">Learn more</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="/images/ph-scale-basics.png" alt="">
                        <h4>pH-scale basics practical </h4>
                        <p>work on it</p>
                        <a href="{{route('ph')}}" class="btn">Learn more</a>
                    </div>
                    <div class="col">
                        <img src="/images/balancing-chemical-equations.png" alt="">
                        <h4>Balancing chemical equations</h4>
                        <p>work on it</p>
                        <a href="{{route('chem_eqn')}}" class="btn">Learn more</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img src="/images/build-an-atom.png" alt="">
                        <h4>Build an atom</h4>
                        <p>work on it</p>
                        <a href="{{route('atom')}}" class="btn">Learn more</a>
                    </div>
                    <div class="col">
                        <img src="/images/build-a-molecule.png" alt="">
                        <h4>Build a molecule</h4>
                        <p>work on it</p>
                        <a href="{{route('molecule')}}" class="btn">Learn more</a>
                    </div>
                </div>
            </div>

        </section>
        <footer>
            <p>&copy2021,CHEM-LAB a practical tool for studying chemistry practicals</p>
        </footer>


</body>
