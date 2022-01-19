@extends('layouts.base')
@section('content')
  <div class="mb-4 title">
    <h1 class="text-center text-2xl mt-5 uppercase font-semibold">Prochains voyages</h1>
    <div class="h-1 bg-white shadow-md rounded w-4/12 mx-auto mt-2"></div>
  </div>
  <div class="card w-11/12 mx-auto rounded-md bg-white shadow-md">
    <header class="py-3 px-4 flex items-start justify-start">
      <div class="relative w-14 h-14 rounded-full shadow-md overflow-hidden mr-2">
        <img class='absolute object-cover h-full w-full' src="{{ Storage::url('image_bg/bg-2.jpg') }}" alt="user">
      </div>
      <div class="flex flex-col justify-start items-start">
        <span class="text-gray-700 font-semibold">Franck Tiomela</span>
        <div class="text-gray-700 text-xs">francktiomela12@gmail.com</div>
        <div >
          <div class="text-yellow-600 text-xs">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star text-gray-400"></i>
            <i class="far fa-star text-gray-400"></i>
          </div>
        </div>
      </div>
    </header>
    <div class="h-0.5 bg-gray-100 rounded w-11/12 mx-auto my-2"></div>
    <div class="my-3 px-4 flex justify-between items-center">
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/2560px-Flag_of_Cameroon.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Douala</p>
          <p class=" font-semibold">Cameroun</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          12 Sept 2022
        </div>
      </div>
      <div class="text-gray-200 text-4xl px-4"><i class="fas fa-plane"></i></div>
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/1280px-Flag_of_Canada.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Montreal</p>
          <p class=" font-semibold">Canada</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          14 Sept 2022
        </div>
      </div>
    </div>
    <div class="my-3 px-4 pb-4">
      <div class="mb-3 px-1 flex items-center justify-between text-2xl card__price">
        <span>30 KG</span>
        <span class="text-gray-500">........................ </span>
        <span>5€/KG</span>
      </div>
      <div>
        <a href="#" class="card__btn text-center w-full px-3 py-2 inline-block rounded-md shadow-md text-white">Repondre a l'annoce</a>
      </div>
    </div>
  </div>
  <div class="card mt-2 w-11/12 mx-auto rounded-md bg-white shadow-md">
    <header class="py-3 px-4 flex items-start justify-start">
      <div class="relative w-14 h-14 rounded-full shadow-md overflow-hidden mr-2">
        <img class='absolute object-cover h-full w-full' src="https://iupac.org/wp-content/uploads/2018/05/default-avatar.png" alt="user">
      </div>
      <div class="flex flex-col justify-start items-start">
        <span class="text-gray-700 font-semibold">Elton Pycharm</span>
        <div class="text-gray-700 text-xs">francktiomela12@gmail.com</div>
        <div >
          <div class="text-yellow-600 text-xs">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star text-gray-400"></i>
            <i class="far fa-star text-gray-400"></i>
          </div>
        </div>
      </div>
    </header>
    <div class="h-0.5 bg-gray-100 rounded w-11/12 mx-auto my-2"></div>
    <div class="my-3 px-4 flex justify-between items-center">
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/1280px-Flag_of_Canada.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Douala</p>
          <p class=" font-semibold">Cameroun</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          12 Sept 2022
        </div>
      </div>
      <div class="text-gray-200 text-4xl px-4"><i class="fas fa-plane"></i></div>
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/2560px-Flag_of_Cameroon.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Montreal</p>
          <p class=" font-semibold">Canada</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          14 Sept 2022
        </div>
      </div>
    </div>
    <div class="my-3 px-4 pb-4">
      <div class="mb-3 px-1 flex items-center justify-between text-2xl card__price">
        <span>20 KG</span>
        <span class="text-gray-500">........................ </span>
        <span>6€/KG</span>
      </div>
      <div>
        <a href="#" class="card__btn text-center w-full px-3 py-2 inline-block rounded-md shadow-md text-white">Repondre a l'annoce</a>
      </div>
    </div>
  </div>
  <div class="card mt-2 w-11/12 mx-auto rounded-md bg-white shadow-md">
    <header class="py-3 px-4 flex items-start justify-start">
      <div class="relative w-14 h-14 rounded-full shadow-md overflow-hidden mr-2">
        <img class='absolute object-cover h-full w-full' src="https://resize-elle.ladmedia.fr/rcrop/796,1024/img/var/plain_site/storage/images/people/la-vie-des-people/news/qui-est-zendaya-la-nouvelle-starlette-disney-2977999/55892285-1-fre-FR/Qui-est-Zendaya-la-nouvelle-starlette-Disney.png" alt="user">
      </div>
      <div class="flex flex-col justify-start items-start">
        <span class="text-gray-700 font-semibold">Zendaya Mano</span>
        <div class="text-gray-700 text-xs">francktiomela12@gmail.com</div>
        <div >
          <div class="text-yellow-600 text-xs">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star text-gray-400"></i>
            <i class="far fa-star text-gray-400"></i>
          </div>
        </div>
      </div>
    </header>
    <div class="h-0.5 bg-gray-100 rounded w-11/12 mx-auto my-2"></div>
    <div class="my-3 px-4 flex justify-between items-center">
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Flag_of_Cameroon.svg/2560px-Flag_of_Cameroon.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Douala</p>
          <p class=" font-semibold">Cameroun</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          12 Sept 2022
        </div>
      </div>
      <div class="text-gray-200 text-4xl px-4"><i class="fas fa-plane"></i></div>
      <div class="flex items-start justify-start flex-col">
        <img class="w-20 opacity-90 rounded-sm h-10"  src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Flag_of_Canada.svg/1280px-Flag_of_Canada.svg.png" alt="" srcset="">
        <div class="mt-2 text-gray-500">
          <p class="">Montreal</p>
          <p class=" font-semibold">Canada</p>
        </div>
        <div class="px-3 shadow-md py-2 border border-gray-50 opacity-80">
          14 Sept 2022
        </div>
      </div>
    </div>
    <div class="my-3 px-4 pb-4">
      <div class="mb-3 px-1 flex items-center justify-between text-2xl card__price">
        <span>30 KG</span>
        <span class="text-gray-500">........................ </span>
        <span>5€/KG</span>
      </div>
      <div>
        <a href="#" class="card__btn text-center w-full px-3 py-2 inline-block rounded-md shadow-md text-white">Repondre a l'annoce</a>
      </div>
    </div>
  </div>
  <div class="mt-4 flex justify-center items-center text-gray-600">
    <span class="p-2 bg-white border">Prevent</span>
    <span class="p-2 bg-white border">1</span>
    <span class="p-2 bg-white border">2</span>
    <span class="p-2 bg-white border">..</span>
    <span class="p-2 bg-white border">3</span>
    <span class="p-2 bg-white border">Next</span>
  </div> 

  <div class="mt-14 mb-4 title">
    <h1 class="text-center text-2xl mt-5 uppercase font-semibold">Comment ça marche ?</h1>
    <div class="h-1 bg-white shadow-md rounded w-4/12 mx-auto mt-2"></div>
  </div>
  
  <div class="flex flex-col w-11/12 mx-auto text-center justify-center items-center mt-3">
    <div class="p-4 relative mb-3 rounded-md bg-white text-gray-600 shadow-md flex flex-col justify-center items-center">
      <div class="w-14 p-5 rounded-full h-14 flex justify-center items-center border-2 border-opacity-40  "><i class="fas inline-block mt-2 fa-user text-4xl text-orange-600 mb-3"></i></div>
      <h1 class="text-gray-800 text-theme font-semibold text-2xl my-2">Créer gratuitement votre compte</h1>
      <p>
        Que ce soit avec votre compte Facebook, Google ou votre adresse mail; créez en quelques clics votre compte sur LOGO
      </p>
      <a href="#" class="px-4 py-2 text-white inline-block my-3 rounded-md bg-orange-600">créer votre compte</a>
      <span class="absolute right-0 top-0 px-4 py-2 bg-theme text-2xl text-white">1</span>
    </div>
    <div class="p-4 relative mb-3 rounded-md bg-white text-gray-600 shadow-md flex flex-col justify-center items-center">
      <div class="w-14 p-5 rounded-full h-14 flex justify-center items-center border-2 border-opacity-40  "><i class="fas text-4xl fa-search"></i></div>
      <h1 class="text-gray-800 text-theme font-semibold text-2xl my-2">Recherchez une annonce</h1>
      <p>
        Vous trouverez toutes les annonces sur la page d'accueil de notre site, et pourrez appliquer les filtres que vous souhaitez pour trouver le voyage correspondant à votre besoin
      </p>
      <a href="#" class="px-4 py-2 text-white inline-block my-3 rounded-md bg-theme">Recherher une annonce</a>
      <span class="absolute left-0 top-0 px-4 py-2 bg-orange-600 text-2xl text-white">2</span>
    </div>
    <div class="p-4 relative mb-3 rounded-md bg-white text-gray-600 shadow-md flex flex-col justify-center items-center">
      <div class="w-14 p-5 rounded-full h-14 flex justify-center items-center border-2 border-opacity-40  "><i class="fas fa-bullhorn text-4xl text-orange-600 mb-3 mt-4 inline-block"></i></div>
      <h1 class="text-gray-800 text-theme font-semibold text-2xl my-2">Placer votre annonce</h1>
      <p>
        Vous souhaiter publier une annonce? cliquer sur "publier une annonce"
      </p>
      <a href="#" class="px-4 py-2 text-white inline-block my-3 rounded-md bg-orange-600">Poster une annone</a>
      <span class="absolute right-0 top-0 px-4 py-2 bg-theme text-2xl text-white">3</span>
    </div>
    <div class="p-4 relative mb-3 rounded-md bg-white text-gray-600 shadow-md flex flex-col justify-center items-center">
      <div class="w-14 p-5 rounded-full h-14 flex justify-center items-center border-2 border-opacity-40  "><i class="fas fa-hand-holding-usd text-4xl text-orange-600 mb-3 inline-block mt-2 "></i></div>
      <h1 class="text-gray-800 text-theme font-semibold text-2xl my-2">Percevez votre commission</h1>
      <p>
        Pour plus de tranquilité pour le voyageur et l'expéditeur,les fonds sont débloqués à reception du colis
      </p>
      <span class="absolute left-0 top-0 px-4 py-2 bg-orange-600 text-2xl text-white">4</span>
    </div>
    <div class="text-center">
      <a href="#" class="px-4 py-2 text-white inline-block my-3 rounded-md bg-theme">Voir plus d'instructions</a>
    </div>
  </div>
@endsection