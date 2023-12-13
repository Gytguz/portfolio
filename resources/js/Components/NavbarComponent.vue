<template>
  <div class="bg-zinc-800">
    <div class="container mx-auto px-6">
      <div class="flex justify-between items-center">
        <div>
          <a href="#" class="text-orange-400 hover:text-orange-300 font-bold">E shop</a>
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