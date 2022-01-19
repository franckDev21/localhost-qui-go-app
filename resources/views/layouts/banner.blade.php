<div class="banner pb-3">
  <div class="banner__content p-4">
    <div class="banner__desc text-center">
      <div class="banner__text text-2xl font-semibold  text-white mb-3">
        Expedier facilement et rapidement vos colis par <br> co-bagage 
      </div>
      <a href="#" class="banner__btn px-4 py-2 shadow-md rounded-md inline-block text-white bg-orange-500 mt-4">Deposer une annonce</a>
    </div>
  </div>
  <span style="height: 1px" class=" w-8/12 mb-3 mx-auto block bg-gray-300 opacity-40"></span>
  <form action="#" method="post" class="px-4 mb-16 py-1 w-11/12 mx-auto rounded-md shadow-md bg-opacity-50  bg-gray-50 flex flex-col items-center">
    @csrf
    @method('POST')
    <div class="py-2 w-full">
      <label for="depart" class="text-gray-600">Depart</label>
      <select name="depart" id="depart" class="text-gray-600 mt-2 inline-block w-full border-none outline-none shadow-md rounded-md px-2 py-3 bg-gray-50">
        <option value="#">Douala - Cameroun</option>
        <option value="#">Yaoundé - Cameroun</option>
        <option value="#">Montreal - Canada</option>
        <option value="#">Toronto - Canada</option>
      </select>
    </div>
    <div class="py-2 w-full">
      <label for="arriver" class="text-gray-600">Arriver</label>
      <select name="arriver" id="arriver" class="text-gray-600 mt-2 inline-block w-full border-none outline-none shadow-md rounded-md px-2 py-3 bg-gray-50">
        <option value="#">Douala - Cameroun</option>
        <option value="#">Yaoundé - Cameroun</option>
        <option value="#">Montreal - Canada</option>
        <option value="#">Toronto - Canada</option>
      </select>
    </div>
    <div class="py-2 w-full">
      <label for="date_depart" class="text-gray-600">Date depart</label>
      <input type="date" name="date_depart" id="date_depart" class="text-gray-600 mt-2 inline-block w-full border-none outline-none shadow-md rounded-md px-2 py-3 bg-gray-50">
    </div>
    <div class="py-2 w-full">
      <label for="date_arrive" class="text-gray-600">Date Arrivée</label>
      <input type="date" name="date_depart" id="date_arrive" class="text-gray-600 mt-2 inline-block w-full border-none outline-none shadow-md rounded-md px-2 py-3 bg-gray-50">
    </div>
    <div class="py-2 w-full">
      <button type="submit" class="form_btn px-4 py-2 text-white  rounded-md inline-block mt-4">Rechercher</button>
    </div>
  </form>
</div>