<template>
  <div @click.stop="cardClick" class="card bg-white w-11/12 p-4 rounded-md shadow-md">
    <div class="mb-4">
      <label for="firstname" class="sr-only">Prenom</label>
      <div class="bg-gray-100 w-full rounded-lg overflow-hidden">
        <input v-model="form.firstname" type="text" placeholder="Your firstname" id="firstname" autocomplete="off" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
      </div>
    </div>

    <div class="mb-4">
      <label for="lastname" class="sr-only">Nom</label>
      <div class="bg-gray-100 w-full rounded-lg overflow-hidden">
        <input v-model="form.lastname" type="text" placeholder="Your lastname" id="lastname" autocomplete="off" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
      </div>
    </div>

    <div class="mb-4">
      <label for="email" class="sr-only">Email</label>
      <div class="bg-gray-100 w-full rounded-lg overflow-hidden">
        <input v-model="form.email" type="text" placeholder="Your email" id="email" autocomplete="off" name="email" class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
      </div>
    </div>

    <div class="mb-4">
      <label for="password" class="sr-only">Password</label>
      <div class="js-field bg-gray-100 w-full rounded-lg overflow-hidden relative">
        <input v-model="form.password" type="password" placeholder="Choose a password" id="password" autocomplete="off" name="password" class="bg-gray-100 border-2 w-full py-4 pl-4 pr-10 rounded-lg " value="">
      </div>
    </div>

    <div class="mb-4 flex justify-end px-2">
      
      <a @click.prevent="switchToLogin" href="#" class="hover:underline transition-all text-blue-400">Login</a>
    </div>

    <div class="mb-4 flex-col flex items-center justify-center">
      <div class="flex items-center text-lg justify-center">
        <span class="sep bg-gray-300 mr-2"></span>
        Or
        <span class="sep bg-gray-300 ml-2"></span>
      </div>
      <div class="flex w-9/12 items-center text-lg justify-between ">
        <button class="card__btn--second flex items-center justify-between text-gray-400 shadow-md rounded-md px-4 mr-2 py-2">
          <svg class="w-5 h-5 mr-1" viewBox="0 0 96 96" version="1.1">
            <path style=" stroke:none;fill-rule:nonzero;fill:#FFC107;fill-opacity:1;" d="M 87.222656 40.164063 L 84 40.164063 L 84 40 L 48 40 L 48 56 L 70.605469 56 C 67.308594 65.3125 58.445313 72 48 72 C 34.746094 72 24 61.253906 24 48 C 24 34.746094 34.746094 24 48 24 C 54.117188 24 59.683594 26.308594 63.921875 30.078125 L 75.234375 18.765625 C 68.09375 12.105469 58.535156 8 48 8 C 25.910156 8 8 25.910156 8 48 C 8 70.089844 25.910156 88 48 88 C 70.089844 88 88 70.089844 88 48 C 88 45.316406 87.722656 42.699219 87.222656 40.164063 Z "/>
            <path style=" stroke:none;fill-rule:nonzero;fill:#FF3D00;fill-opacity:1;" d="M 12.613281 29.382813 L 25.753906 39.019531 C 29.308594 30.214844 37.921875 24 48 24 C 54.117188 24 59.683594 26.308594 63.921875 30.078125 L 75.234375 18.765625 C 68.09375 12.105469 58.535156 8 48 8 C 32.636719 8 19.3125 16.675781 12.613281 29.382813 Z "/>
            <path style=" stroke:none;fill-rule:nonzero;fill:#4CAF50;fill-opacity:1;" d="M 48 88 C 58.332031 88 67.71875 84.046875 74.816406 77.617188 L 62.4375 67.140625 C 58.421875 70.183594 53.429688 72 48 72 C 37.597656 72 28.761719 65.367188 25.433594 56.109375 L 12.390625 66.15625 C 19.011719 79.113281 32.453125 88 48 88 Z "/>
            <path style=" stroke:none;fill-rule:nonzero;fill:#1976D2;fill-opacity:1;" d="M 87.222656 40.164063 L 84 40.164063 L 84 40 L 48 40 L 48 56 L 70.605469 56 C 69.023438 60.472656 66.144531 64.332031 62.433594 67.140625 C 62.433594 67.140625 62.4375 67.140625 62.4375 67.136719 L 74.816406 77.613281 C 73.941406 78.410156 88 68 88 48 C 88 45.316406 87.722656 42.699219 87.222656 40.164063 Z "/>
          </svg>
          Google
        </button>
        <button class="card__btn--second flex items-center justify-between text-gray-400 shadow-md rounded-md px-4 py-2">
          <svg class="w-5 h-5 mr-1" viewBox="0 0 96 96" version="1.1">
            <path style=" stroke:none;fill-rule:nonzero;fill:#3F51B5;fill-opacity:1;" d="M 84 74 C 84 79.523438 79.523438 84 74 84 L 22 84 C 16.476563 84 12 79.523438 12 74 L 12 22 C 12 16.476563 16.476563 12 22 12 L 74 12 C 79.523438 12 84 16.476563 84 22 Z "/>
            <path style=" stroke:none;fill-rule:nonzero;fill:#FFFFFF;fill-opacity:1;" d="M 68.734375 50 L 62 50 L 62 76 L 52 76 L 52 50 L 46 50 L 46 42 L 52 42 L 52 37.179688 C 52.003906 30.164063 54.917969 26 63.183594 26 L 70 26 L 70 34 L 65.425781 34 C 62.207031 34 62 35.199219 62 37.445313 L 62 42 L 70 42 Z "/>
          </svg>
          Facebook
        </button>
      </div>
    </div>
    <div>
      <button  @click="next" type="submit" :class="{ 'disabled' : isDisabled}" class="bg-orange-600 hover:bg-orange-700 transition-all  text-white px-4 py-3 rounded w-full  font-medium ">Suivant</button>
    </div>
  </div>
</template>

<script>

import { reactive } from 'vue'

export default {
  name : "StepOneRegister",
  props : {
    form : {
      type : Object
    }
  }
  ,
  computed : {
    isDisabled(){
      return this.form.email == '' || this.form.password == '' || this.form.firstname == '' || this.form.lastname == ''
    }
  },
  setup(props,context){

    const form = reactive({
      firstname : '',
      lastname : '',
      email : '',
      password : ''
    })

    const next = () => {
      context.emit('nextStep',form)
    }
    
    const cardClick = (e) => {
      context.emit('cardClick')
    }

    const switchToLogin = () =>{
      context.emit('switch','login')
    }

    return {
      cardClick,
      switchToLogin,
      next,
      form
    }
  }
}
</script>

<style lang="scss">
  .disabled{
    cursor: not-allowed;
    opacity: .6;
    pointer-events: none;
    &:hover{
      background-color: initial;
    }
  }
</style>