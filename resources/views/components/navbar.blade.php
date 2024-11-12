<header class="bg-gray-200 py-5">
    <nav class="navbar navbar-expand-lg ">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-black" href="{{ route('home') }}">Navbar</a>

            <ul class="flex gap-6">
                <li class="nav-item">
                    <a class="text-blue-600 font-medium active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>


            @if(!auth()->check())
                <a href="{{ route('user.loginpage') }}">Login</a>
            @else
                <a href="{{ route('user.profile') }}">Profile</a>

                <form action="{{ route('user.logout') }}" method="POST" >
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @endif

        </div>
    </nav>

</header>
