<!--header start-->
<header class="l-header @if(request()->is('/'))l-header_overlay @endif">
    <div
        class="l-navbar l-navbar_expand @if(request()->is('/'))l-navbar_t-dark-trans @else l-navbar_t-light @endif js-navbar-sticky">
        <div class="container-fluid">
            <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                <!--logo start-->
                <a href="index.html" class="logo-brand">
                    <img class="retina"
                        src="/assets/img/@if(request()->is('/')){{'logo-dark.png'}}@else{{'logo.png'}}@endif"
                        alt="Massive">
                </a>
                <!--logo end-->

                <!--mega menu start-->
                <ul class="menuzord-menu menuzord-right c-nav_s-standard">
                    <li class="@if(request()->is('/'))active @endif"><a href="/">Home</a>
                    </li>
                    <li class="@if(request()->is('about'))active @endif"><a href="/about">About</a>
                    </li>
                    <li class="@if(request()->is('contact'))active @endif"><a href="/contact">Contact</a>
                    </li>
                    <li class="@if(request()->is('blog_list'))active @endif"><a href="/blog_list">blog</a>
                    </li>
                </ul>
                <!--mega menu end-->
            </nav>
        </div>
    </div>

</header>
<!--header end-->
