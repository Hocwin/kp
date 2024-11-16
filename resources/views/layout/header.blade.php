<!-- resources/views/layouts/header.blade.php -->
<header class="bg-primary text-white p-4">
    <div class="container">
        <h1>My Laravel App</h1>
        <nav>
            <ul class="nav">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link text-white">Home</a></li>
                @auth
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link text-white">Logout</a></li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="{{ route('signup') }}" class="nav-link text-white">Sign Up</a></li>
                @endauth
            </ul>
        </nav>
    </div>
</header>
