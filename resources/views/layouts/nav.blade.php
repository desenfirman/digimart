 <!-- Navigation -->
 <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <a class="navbar-brand" href="/">DigimartLogo</a>
        <div class="collapse navbar-collapse" id="navbarExample">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/index">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
               @if(Auth::check())
               <li class="nav-item navbar-right nav-link">
                Welcome, <a href="/dashboard/profile" style="text-decoration: none;">{{ Auth::user()->name }}</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/logout">Logout</a>
            </li>
            @endif
        </ul>
    </div>
</div>
</nav>
