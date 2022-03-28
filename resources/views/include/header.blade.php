<!-- HEADER-->
@if(session('user'))
    <nav class="py-3 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand py-0" href="/">
                <h1 class="text-dark">Cov19ox</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav">
                    <li class="nav-item mx-1"><a href="/menu" class="nav-link text-dark">Home</a></li>
                    <li class="nav-item mx-1"><a href="/vaccination" class="nav-link text-dark">Vaccination</a></li>
                    <li class="nav-item mx-1"><a href="/healthcode" class="nav-link text-dark">Health code</a></li>
                    <li class="nav-item mx-1"><a href="/epidemic" class="nav-link text-dark">Epidemic information</a></li>
                    <li class="nav-item mx-1"><a href="/notifications" class="nav-link text-dark">notifications</a></li>
                    <li class="nav-item mx-1"><a href="/emergency" class="nav-link text-dark">Emergency</a></li>
                    <li class="nav-item mx-1"><a href="/help" class="nav-link text-dark">Help</a></li>
                    <li class="nav-item mx-1"><a href="/logout" class="nav-link text-dark">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
@else
    <nav class="py-3 navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand py-0" href="/">
                <h1 class="text-dark">Cov19ox</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbar-content">
                <ul class="navbar-nav">
                    <li class="nav-item mx-1"><a class="nav-link text-dark" href="/">Home</a></li>
                    <li class="nav-item mx-1"><a  href="/login" class="nav-link text-dark">Login</a></li>
                    <li class="nav-item mx-1"><a  href="/register" class="nav-link text-dark">Register</a></li>
                    <li class="nav-item mx-1"><a  href="/about" class="nav-link text-dark">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
@endif

