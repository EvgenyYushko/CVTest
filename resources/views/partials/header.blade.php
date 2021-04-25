<section id="home" class="pfblock-image screen-height">
    <div class="home-overlay"></div>
    <div class="intro">
        <div class="start">Hello, my name is {{$data['profile']->name}} {{$data['profile']->surname}} and I am</div>
        <h1>.Net Developer</h1>
        <div class="start">creating modern and responsive Application</div>
    </div>

    <a href="#services">
        <div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
        </div>
    </a>

</section>

<!-- Home end -->

<!-- Navigation start -->

<header class="header">

    <nav class="navbar navbar-custom" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">{{$data['profile']->name}} {{$data['profile']->surname}}</a>
            </div>

            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Works</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

        </div><!-- .container -->

    </nav>

</header>