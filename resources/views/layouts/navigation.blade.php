<nav class=" nav">
  <div class="nav__header flex py-2 px-4 shadow-sm  items-center justify-between  ">
    <a class="logo text-bold text-xl  flex items-center font-extrabold opacity-80">
      <span class="text-white">LOGO</span>
    </a>
    <!-- Hamburger -->
    <div class="flex items-center sm:hidden">
      <button id="menu-button"  class="inline-flex text-white items-center justify-center p-2 rounded-md  focus:outline-none transition duration-150 ease-in-out">
          <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path  class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path  class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
      </button>
    </div>
  </div>
  <ul id='menu' class="py-1 px-3 fixed bottom-0 left-0 right-0 top-0 z-20  shadow-sm bg-white">
    <div class="flex w-full justify-end items-center">
      <span id="menu-croix" class="text-3xl text-gray-400 p-2 inline-block">
        <i class="fas fa-times"></i>
      </span>
    </div>
    <div class="flex flex-col justify-start items-start text-gray-500">
      <div class="text-xl font-semibold uppercase">Menu</div>
      <ul class="ml-3">
        <li class="py-2 text-lg text-gray-600">
          <i class='bx bx-home text-2xl mr-3 inline-block' ></i><a href="#">Accueil</a>
        </li>
        <li class="py-2 text-lg text-gray-600">
          <i class="fas fa-bullhorn mr-3 inline-block"></i><span>Annonce</span> 
          <ul class="ml-8 mt-1">
            <li class=""><i class="fas fa-chevron-right"></i>  <a href="#">Créer une annonce</a></li>
            <li class=""><i class="fas fa-chevron-right"></i>  <a href="#">Poster une annonce</a></li>
            <li class=""><i class="fas fa-chevron-right"></i>  <a href="#">Rechercher une annonce</a></li>
          </ul>
        </li>
        <li class="py-2 text-lg text-gray-600">
          <i class="far fa-building  mr-3 inline-block"></i><a href="#">A propos</a>
        </li>
        <li class="py-2 text-lg text-gray-600">
          <i class="fas fa-headset  mr-3 inline-block"></i><a href="#">Contact nous</a>
        </li>
      </ul>
      <div class="text-xl font-semibold mt-3 uppercase">S'idendifier</div>
      
      <!-- login and register -->
      <identification></identification>

      <div class="text-xl font-semibold mt-3 uppercase">Autre</div>
      <ul class="ml-3">
        <li class="py-2 text-lg text-gray-600">
          <i class="fas fa-question  mr-3 inline-block"></i><a href="#">Comment ça marche </a>
        </li>
        <li class="py-2 text-lg text-gray-600">
          <i class="fas fa-clipboard-list  mr-3 inline-block"></i><a href="#">FAQ</a></li>
        </ul>
    </div>
  </ul>
</nav>
