<template>
  <nav class="flex justify-end relative z-20">
    <div class="shadow items-center sm:hidden">
<!-- Hamburger -->
      <button
      id="hamburger"
      @click="showMenuDropdown = !showMenuDropdown"
      class="inline-flex items-center justify-center my-1 p-2 rounded-md text-orange-400 
      hover:text-orange-300 hover:bg-zinc-600
        focus:outline-none focus:bg-zinc-600 focus:text-orange-400"
        >
        <svg
          class="h-6 w-6"
          stroke="currentColor"
          fill="none"
          viewBox="0 0 24 24"
          >
          <path
          :class="{'hidden': showMenuDropdown, 'inline-flex': !showMenuDropdown}"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M4 6h16M4 12h16M4 18h16"
          />
          <path
          :class="{'hidden': !showMenuDropdown, 'inline-flex': showMenuDropdown }"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M6 18L18 6M6 6l12 12"
          />
        </svg>
      </button>
    </div>
<!-- Content -->
    <div :class="{ 'sm:flex sm:flex-row sm:relative': !showMenuDropdown, 'hidden': !showMenuDropdown }" 
      class="absolute sm:relative bg-orange-400 px-4 mt-11 sm:mt-0 shadow sm:shadow-none">
      <div :class="{ 'flex-col sm:flex sm:flex-row': showMenuDropdown, 'sm:flex sm:flex-row': !showMenuDropdown }" 
        class="items-center sm:space-x-3 relative">
        <div v-for="(item, i) in items" :key="i">
          <a :href="item.link" class="block py-3 hover:text-zinc-600 z-10">
            {{ item.title }}
          </a>
        </div>
        <div class="flex sm:block">
          <a class="relative text-zinc-800 hover:text-zinc-600 pb-3 py-1" href="#">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 3H5L5.4 5M7 13H17L21 5H5.4M7 13L5.4 5M7 13L4.70711 15.2929C4.07714 15.9229 4.52331 17 5.41421 17H17M17 17C15.8954 17 15 17.8954 15 19C15 20.1046 15.8954 21 17 21C18.1046 21 19 20.1046 19 19C19 17.8954 18.1046 17 17 17ZM9 19C9 20.1046 8.10457 21 7 21C5.89543 21 5 20.1046 5 19C5 17.8954 5.89543 17 7 17C8.10457 17 9 17.8954 9 19Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span class="absolute top-0 sm:top-3 left-5 bg-red-500 text-white p-1 rounded-full h-3 w-3 flex items-center justify-center text-xxs">0</span>
          </a>
        </div>
      </div>
    </div>

  </nav>
</template>

<script>
import { defineComponent } from 'vue';


export default defineComponent({
    props: [
        'items',
    ],

    data() {
        return {
            showMenuDropdown: false,
        }
    },
});
</script>