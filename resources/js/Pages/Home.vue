<template>
    <div>
        <Head :title="title" />
        
        <NavbarComponent />

    </div>
    <div>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.product_code }}
            </li>
        </ul>
        <h1 class="text-red-100 font-bold">hello world!! vue inertia</h1>
        <h1 class="text-sm font-bold text-white bg-purple">Hello Tailwind!</h1>
        <h1 class="text-3xl font-bold">
      Hello world!
</h1>
<h1 className="text-3xl font-bold underline text-red-400">
      Hello world!
    </h1>






    </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Head } from '@inertiajs/inertia-vue3';
import NavbarComponent from '../Components/NavbarComponent.vue';

export default defineComponent({
    props: {
        products: Array,
        title: String,
    },
    components: {
        Head,
        NavbarComponent,
    },
});
</script>
