<header class="bg-gray-200 py-5">
    <nav class="navbar navbar-expand-lg ">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-2xl font-black" href="#">Navbar</a>

            <ul class="flex gap-6">
                <li class="nav-item"><a class="text-blue-600 font-medium active" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav-item"><a class="font-medium hover:text-blue-600 transition ease-in-out duration-300" href="{{ route('contact') }}">Contact</a></li>

            </ul>

            <form class="flex bg-white rounded-lg overflow-hidden" role="search">
                <input class="py-2 focus:outline-0 px-3" type="search" placeholder="Search" aria-label="Search">
                <button class="bg-blue-500 text-white px-3 py-2" type="submit">Search</button>
            </form>
        </div>
    </nav>

</header>
