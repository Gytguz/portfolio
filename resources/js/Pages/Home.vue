<template>
    <app-layout title="Home">
        <HeroComponent :categories="categories"/>
        <ProductCardComponent v-if="products.length>0" :products="products"/>
            <div v-else>
                <p class="bg-red-500 p-4">You have no products in your database. Check if it's properly connected and if so in your terminal run: <br><br> php artisan migrate <br>php artisan db:seed</p>
            </div>

    </app-layout>
</template>

<script setup>
    import AppLayout from '@/Layouts/AppLayout.vue';
    import HeroComponent from '@/Components/HeroComponent.vue';
    import ProductCardComponent from '@/Components/ProductCardComponent.vue';

    defineProps({
        products: Array,
        categories: Array,
    })

</script>
