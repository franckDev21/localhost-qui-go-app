<template>
  <div class="fixed flex-col flex justify-center items-center top-0 left-0 right-0 bottom-0 bg-gray-800 bg-opacity-90">
    <div @click.stop="closeModal" class="mb-2 w-8 h-8 p-2 flex-none rounded-full mr-4 transform hover:scale-105  transition-all flex justify-center items-center bg-white text-red-400 self-end text-lg">
      <i class="fas fa-times"></i>
    </div>
      <StepOneRegister v-show="step == 1" :form="form" @nextStep="next" @switch="switchToLogin" />
      <StepTwoRegister v-show="step == 2" @register="register" @prevStep="prev"  @switch="switchToLogin" />
  </div>
</template>

<script>

import { ref, reactive } from 'vue'
import StepOneRegister from './StepOneRegister.vue'
import StepTwoRegister from './StepTwoRegister.vue'

export default {
  name : 'Register',
  components : {
    StepOneRegister,
    StepTwoRegister
  },
  setup(props,context){

    let form = reactive(null)

    let step = ref(1)

    const next = (data) => {
      form = data
      if(step.value == 1){
        step.value++
      }
    }

    const prev = () => {
      if(step.value == 2){
        step.value--
      }
    }

    const register = (data) => {
      form = {...form,...data}
      // on envoie au back 
      console.log(form)
      // on efface les données du formulaire
      form = {}
    }

    const closeModal = (e)=>{
      e.stopPropagation()
      context.emit('close')
    }

    const cardClick = (e) => {
      e.stopPropagation()
    }

    const switchToLogin = () =>{
      context.emit('switch','login')
    }

    return {
      closeModal,
      cardClick,
      switchToLogin,
      step,
      next,
      prev,
      form,
      register
    }
  }
}
</script>


<style lang="scss" >
.card{
  .sep{
    width: 100px;
    height: 1px;
    background-color: rgba(141, 141, 141, 0.582);
  }
  &__btn{
    &--second{
      width: 130px;
    }
  }
}
</style>