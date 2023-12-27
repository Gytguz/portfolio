<template>
    <app-layout title="Shop">
        <Icons name="back" href="javascript:history.back()"/>

        <div class="fixed top-1/2 transform -translate-y-1/2 ml-6">
            <div class="flex flex-col items-center justify-center space-y-4">
                <Link :href="route('shopPage', { category: category.slug })" class="w-full py-4 sm:py-4" v-for="(category, id) in categories" :key="id">
                    {{ category.name }}
                </Link>
            </div>
        </div>

        <ProductCardComponent v-if="products.length>0" :products="products"/>
            <div v-else>
                <p class="bg-red-500 p-4">You have no products in your database. Check if it's properly connected and if so in your terminal run: <br><br> php artisan migrate <br>php artisan db:seed</p>
            </div>

    </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductCardComponent from '@/Components/ProductCardComponent.vue';
import Icons from '@/Components/Icons.vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        products: Array,
        categories: Array,
    },
        components: {
            AppLayout,
            ProductCardComponent,
            Icons,
            Link
    },
});
</script>
