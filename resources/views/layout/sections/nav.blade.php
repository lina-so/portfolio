<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
                <li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cover-letter') }}">Cover letter</a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Projects</a></li>
                {{-- <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                     aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                        <li class="nav-item"><a class="nav-link" href="portfolio-details.html">Portfolio Details</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
