<template>
  <div class="bg-stone-200">
    <div class="container mx-auto px-6 py-3">
      <div class="flex justify-between items-center">
        <div>
          <Link :href="route('homePage')" class="hover:text-stone-500">E Shop</Link>
        </div>
        <div>
          <BurgerComponent :items="burgerData"/>
        </div>
      </div>
    </div>
  </div>
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
      let burgerData = [
        {title:"Register", link:"#"},
        {title:"Login", link:"#"},
        {title:"Shop", link:"#"},
        ]

        return { burgerData }
    },


    methods: {
        logout() {
            this.$inertia.post(route('logout'));
        },
    }

});
</script>