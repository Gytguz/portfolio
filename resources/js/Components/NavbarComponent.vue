<template>
  <nav class="bg-stone-200 shadow">
    <div class="container mx-auto px-6 py-3 sm:flex sm:justify-between sm:items-center">
      <div class="flex justify-between items-center">
        <div>
          <Link :href="route('homePage')">E Shop</Link>
        </div>
        <!-- Mobile menu button -->
        <div class="-mr-2 flex items-center sm:hidden">
          <button
          id="hamburger"
          @click="showMenuDropdown = !showMenuDropdown"
          class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 
          hover:text-gray-500 hover:bg-gray-100 
            focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition"
            >
            <svg
              class="h-6 w-6"
              stroke="currentColor"
              fill="none"
              viewBox="0 0 24 24"
              >
              <path
              :class="{'hidden': showMenuDropdown, 'inline-flex': !showMenuDropdown }"
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
      </div>
      
      
      <div :class="{ 'sm:flex': !showMenuDropdown, 'hidden': !showMenuDropdown }">
        <!-- <div class="hidden sm:flex sm:items-center sm:ml-6"> -->
          <!-- Menu -->
          <div class="ml-3 relative">
            <div :class="{ 'flex-col': showMenuDropdown, 'flex-row': !showMenuDropdown }" class="items-center space-x-3 relative">
              <template v-for="link in Links">
                <Link :href="route(link.link)" class="hover:text-yellow-500 transition">
                  {{ link.name }}
                </Link>
                <BurgerComponent :routes="link.link" :names="link.name"/>
            <!-- Other menu items -->
            <form method="POST" @submit.prevent="logout" v-if="$page.props.user">
              <button type="submit" class="hover:text-yellow-500 transition">
                Log Out
              </button>
            </form>
            </template>
            <Link :href="route('homePage')" class="hover:text-red-700 transition">            
              <!-- <span
                class="bg-red-600 text-white text-xs rounded-md p-1 absolute"
                style="top: -10px; right: -8px;"
                v-if="$page.props.cartCount > 0"s
              >
                {{ $page.props.cartCount }}
              </span> -->
              <!-- <icon name="cart" class="w-4 h-4 fill-current"></icon> -->
            </Link>
          </div>
        </div>
      </div>






    </div>
  </nav>
</template>


<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import BurgerComponent from '@/Components/BurgerComponent.vue';

export default defineComponent({
    components: {
        Link,
        BurgerComponent,
    },

    setup(){
      let Links = [
        {name:"Register", link:"homePage"},
        {name:"Login", link:"homePage"},
        {name:"Shop", link:"homePage"},
        ]

        return {Links}
    },

    data() {
        return {
            showMenuDropdown: false,
        }
    },

    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        },
    }

});
</script>