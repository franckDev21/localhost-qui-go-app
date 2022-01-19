<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title',config('app.name', 'Laravel'))</title>
        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>  
        <!-- additional css -->
          @yield('css')
        <!-- js -->
        <script src="{{ asset('js/app.js') }}" defer></script>
          <!-- additional js -->
          @yield('js')

    </head>
    <body class=" bg-gray-200 " id="app">
      <header id="header">
        @include('layouts.navigation')
        @include('layouts.banner')
      </header>
      <main>
        @yield('content')
      </main>

      <a href="#header" class=" fixed bottom-3 right-3 rounded-full w-12 h-12 p-2 flex items-center justify-center bg-opacity-90 bg-orange-500 "><i class="fas fa-chevron-up text-lg text-white"></i></a>

      <footer class="mt-4 bg-theme text-white py-4">
        <div class="w-11/12 mx-auto p-4 bg-white bg-opacity-50 rounded-md">
          <h1 class="text-2xl mt-2 mb-0 text-white font-semibold ">Abonnez-vous à notre newsletter</h1>
          <span class="w-3/12 inline-block h-1 opacity-70 bg-orange-600 rounded-md"></span>
          <p class="my-2">Inscrivez-vous pour recevoir la newsletter contenant les dernieres annonces</p>
          <div class="flex overflow-hidden rounded-md w-full">
            <input type="text" placeholder="Entrer votre Email ..." class="px-2 py-3 bg-white shadow-md text-gray-500 w-8/12">
            <button class="px-2 py-3 w-4/12 rounded-tr-md rounded-br-md bg-orange-600 text-white" type="submit">Envoyez</button>
          </div>
        </div>
        <span class="h-0.5 w-9/12 mb-3 mx-auto block mt-5 bg-gray-300 opacity-40"></span>
        <div class="w-11/12 mx-auto pb-4 pt-3 mt-3">
          <h2 class="text-white text-2xl">Autre liens de navigation</h2>
          <span class="w-2/12 inline-block h-1 font-semibold bg-orange-600 rounded-md"></span>
          <div class="">
            <a href="#" class="text-white block hover:text-orange-600 transition-all">Foire Aux Questions</a>
            <a href="#" class="text-white block hover:text-orange-600 transition-all">Nous contacter</a>
            <a href="#" class="text-white block hover:text-orange-600 transition-all">Prochains voyages</a>
            <a href="#" class="text-white block hover:text-orange-600 transition-all">Comment ça marche ?</a>
          </div>
        </div>
        <span class="h-0.5 w-9/12 mb-3 mx-auto block mt-5 bg-gray-300 opacity-40"></span>
        <div class="w-11/12 mx-auto pb-4 pt-3 mt-3">
          <h2 class="text-white text-2xl">Nous contacter</h2>
          <span class="w-2/12 inline-block h-1 font-semibold bg-orange-600 rounded-md"></span>
          <div class="flex flex-col justify-start items-start">
            <a href="#" class="text-white transition-all"><span class=" ">Douala</span>   <span class="text-orange-600 ">+237 697 879 175</span></a>
            <a href="#" class="text-white transition-all"><span class=" ">Yaoundé</span>  <span class="text-orange-600 ">+237 694 833 033</span></a>
            <a href="#" class="text-white transition-all"><span class=" ">Paris</span>  <span class="text-orange-600 ">+33 6 51 26 27 68</span></a>
            <a href="#" class="text-white transition-all"><span class=" ">WhatsApp</span>  <span class="text-orange-600 ">+237 673 964 551</span></a>
            <a href="#" class="text-white transition-all"><span class=" ">E-mail</span>  <span class="text-orange-600 ">contact-team@qui-go.com</span></a>
          </div>
        </div>
        <div class="w-11/12 mx-auto pb-4 text-center pt-3 mt-3">
          <h2 class="text-white text-2xl mb-4">Suivez-nous</h2>
          <div class="flex justify-center items-center">
            <span class="w-8 h-8 flex justify-center items-center bg-white rounded-full shadow-md mr-2"><i class="text-blue-600 fab fa-facebook-f"></i></span>
            <span class="w-8 h-8 flex justify-center items-center bg-white rounded-full shadow-md mr-2"><i class="text-blue-400 fab fa-linkedin"></i></span>
            <span class="w-8 h-8 flex justify-center items-center bg-white rounded-full shadow-md mr-2"><i class="text-blue-900 fab fa-twitter"></i></span>
            <span class="w-8 h-8 flex justify-center items-center bg-white rounded-full shadow-md mr-2"><i class="text-green-600 fab fa-whatsapp"></i></span>
          </div>
        </div>
        <span style="height:1px" class=" w-11/12 mb-3 mx-auto block mt-5 bg-gray-300 opacity-40"></span>
        <div class="text-center">
          <span>Copyright ©2022 Logo</span>
        </div>
      </footer>
    </body>
    
</html>
