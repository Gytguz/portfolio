<template>
  <div class="bg-zinc-800">
    <div class="container mx-auto px-6">
      <div class="flex justify-between items-center">
        <div>
          <a href="/" class="text-orange-400 hover:text-orange-300 font-bold">E shop</a>
        </div>
        <div>
          <BurgerComponent :items="burgerData"/>
        </div>
      </div>
    </div>
  </div>
</template>


<script setup>
  import BurgerComponent from '@/Components/BurgerComponent.vue';
  
  let burgerData = [
        {title:"Register", link:"/register"},
        {title:"Login", link:"/login"},
        {title:"Shop", link:"/shop"},
      ]

</script>