<template>
    <app-layout :title=" `Shop ${ product.name }` ">
        <div>
            Product name: {{ product.name }}
        <div>
            Product id: {{ product.id }}
        </div>    
        </div>
        <div>
            <div>
                Category:
            </div>        
            <div v-for="category in categories">{{ category.name }}</div>
        </div>
        <div v-for="category in categories">category id: {{ category.id }}</div>

        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img :src="product.image" :alt="product.name" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Icons from '@/Components/Icons.vue';


export default defineComponent({
    props: {
        product: Object,
        categories: Array,
    },
        components: {
            AppLayout,
            Icons,
            Link
    },
});
</script>
