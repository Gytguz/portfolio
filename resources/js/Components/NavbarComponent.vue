<template>
  <div class="bg-zinc-800">
    <div class="container mx-auto px-6">
      <div class="flex justify-between items-center">
        <div>
          <a href="/" class="text-orange-400 hover:text-orange-300 font-bold">E shop</a>
        </div>
        <div>
          <div class="flex flex-row items-center">
            <div v-if="$page.props.user.name" class="text-orange-400 pr-4">You're logged in as {{ $page.props.user.name }}</div>
            <BurgerComponent v-if="$page.props.user.name" :items="burgerDataAuth"/>
            <BurgerComponent v-else :items="burgerDataGuest"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script setup>
  import BurgerComponent from '@/Components/BurgerComponent.vue';
  
  let burgerDataGuest = [
        {title:"Register", link:"/register"},
        {title:"Login", link:"/login"},
        {title:"Shop", link:"/shop"},
      ]

  let burgerDataAuth = [
        {title:"Dashboard", link:"/dashboard"},
        {title:"Logout", link:"/users/logout"},
        {title:"Shop", link:"/shop"},
      ]

</script>