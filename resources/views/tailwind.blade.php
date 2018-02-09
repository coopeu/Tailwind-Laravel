<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Tailwind - Laravel</title>

        <!-- Fonts -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class='bg-teal-lightest font-sans'>

    	<header class='bg-teal-darkest text-teal-lighter w-full py-4 px-4'>
    		<div class='container flex justify-between mx-auto items-center'>
                <img src='img/consen_50.png' class='float-left'/>
    			<h1 class='xl:text-3xl lg:text-2xl md:text-xl sm:text-base text-sm'>Colors for TailWind</h1>
                <ul class='md:flex list-reset'>
                    <li><a class='hover:text-pink-lighter font-bold text-pink no-underline m-4' href="https://laravel.com/docs">Colors</a></li>
                    <li><a class='hover:text-pink-lighter font-bold text-pink no-underline m-4' href="https://laravel.com/docs">Download</a></li>
                    <li><a class='hover:text-pink-lighter font-bold text-pink no-underline m-4' href="https://laravel.com/docs">How to use</a></li>
                    <li><a class='hover:text-pink-lighter font-bold text-pink no-underline m-4' href="https://laravel.com/docs">Contact</a></li>
                </ul>
    		</div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
			</header>
            <div class="container my-4 mx-auto px-4 text-justify">
                <h2 class='text-teal-darker lg:text-teal-dark mb-4 text-center'>Colors facilitator for Tailwind</h2>
                <p class='text-lg text-pink-dark font-bold italic text-center'>Laravel demo using CSS colors variables integrated into Tailwind.</p>
                <h3 class='text-teal-darker lg:text-teal-dark mt-4'><i class="fas fa-thumbs-up"></i> Laravel environment</h3>
                <p class='text-teal-darkest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h3 class='text-teal-darker lg:text-teal-dark mt-4'><i class="fas fa-arxive"></i> Tailwind framework</h3>
                <p class='text-teal-darkest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3 class='text-teal-darker lg:text-teal-dark mt-4'><i class="fas fa-bars"></i> Back-end system</h3>
                <p class='text-teal-darkest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<h3 class='text-teal-darker lg:text-teal-dark mt-4'><i class="far fa-address-card"></i> For and To Designers</h3>
                <p class='text-teal-darkest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          

         <div class='flex flex-wrap m-6'>
         		<div class='bg-teal-darker p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
	       		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
	       		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         		<div class='bg-teal-darker text-teal-lightest p-4 align-middle md:w-1/2 lg:w-1/3'><p class='text-teal-lightest'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
         </div>

				 <div class="container my-4 mx-auto px-4 text-center">
           <div class="title m-b-md mb-4">
            <h4 class='text-teal-dark'>More of Tailwind on Laravel</h4>
           </div>
           <div class="links">
              <a class='hover:text-pink hover:underline text-pink-darker no-underline m-4' href="https://laravel.com/docs">Documentation</a> 
              <a class='hover:text-pink hover:underline text-pink-darker no-underline m-4' href="https://laracasts.com">Laracasts</a> 
              <a class='hover:text-pink hover:underline text-pink-darker no-underline m-4' href="https://laravel-news.com">News</a> 
              <a class='hover:text-pink hover:underline text-pink-darker no-underline m-4' href="https://forge.laravel.com">Forge</a> 
              <a class='hover:text-pink hover:underline text-pink-darker no-underline m-4' href="https://github.com/laravel/laravel">GitHub</a>
           </div>
         </div>

       </div>
    </body>
</html>
