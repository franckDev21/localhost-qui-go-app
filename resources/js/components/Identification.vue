<template>
  <div>
    <template v-if="mode == 'login'">
      <Login @login='login' @switch="changeMode" @close="closeModal" />
    </template>
    <template v-else-if="mode == 'register'">
      <Register @switch="changeMode" @close="closeModal" />
    </template>

    <div class="mt-3">
      <a @click.prevent="changeMode('register')" href="#" class="px-3 py-1 inline-block mr-3 rounded-md bg-orange-600 text-white shadow">s'inscrire</a>
      <a @click.prevent="changeMode('login')" href="#" class="px-3 py-1 inline-block mr-3 rounded-md bg-theme text-white shadow">se connecter</a>
    </div>
  </div>
</template>

<script>
import { ref } from 'vue'
import Login from './Login.vue'
import Register from './Register.vue'

export default {
  name : 'Identification',
  components : {
    Login,
    Register
  },
  setup(){
    let mode = ref(null)

    const login = (data) => {
      console.log(data)
    }

    // permet de changer le mode('login' ou 'register') en fonction de la valeur de son parametre
    const changeMode = (value)=>{
      mode.value = value
    }
    // permet de fermet la boite boite modal en activité
    const closeModal = ()=>{
      mode.value = null
    }

    return {
      mode,
      changeMode,
      closeModal,
      login
    }
  }
}
</script>

<style>

</style>