<template>
    <app-layout :title=" `Shop ${ selectedCategory[0].toUpperCase() + selectedCategory.substring(1) }` ">
        <HeaderBotComponent>
                        <Icons name="forward"/>
            <a href="/shop">Shop</a>
            <span>&nbsp;{{ selectedCategory[0].toUpperCase() + selectedCategory.substring(1) }}</span>
        </HeaderBotComponent>

        <div class="sm:fixed sm:top-1/2 pt-10 sm:pt-0 px-5 sm:px-0 top-1 transform sm:-translate-y-1/2 sm:-translate-x-0 -translate-x-1 sm:ml-6 z-10">
            <div class="flex flex-row sm:flex-col items-center justify-center sm:space-y-4 space-x-4 sm:space-x-0">
                <Link :href="route('shopPage', { category: category.slug })" 
                class="w-full text-xs py-4 justify-center inline-flex items-center px-2 
                border border-transparent rounded-md tracking-widest transition bg-orange-400 text-zinc-800
                hover:text-zinc-500"
                :class="route().current('shopPage', { category: category.slug }) ? 'text-orange-200 bg-zinc-800' : 'text-zinc-800'"
                v-for="(category, id) in categories" :key="id">
                    {{ category.name }}
                </Link>
            </div>
        </div>

        <div class="sm:ml-28">
            <ProductCardComponent v-if="products.length>0" :products="products"/>
                <div v-else>
                    <p class="bg-red-500 p-4">You have no products in your database. Check if it's properly connected and if so in your terminal run: <br><br> php artisan migrate <br>php artisan db:seed</p>
                </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ProductCardComponent from '@/Components/ProductCardComponent.vue';
import Icons from '@/Components/Icons.vue';
import HeaderBotComponent from '@/Components/HeaderBotComponent.vue';


export default defineComponent({
    props: {
        products: Array,
        categories: Array,
        selectedCategory: String,
    },
        components: {
            AppLayout,
            ProductCardComponent,
            Icons,
            Link,
            HeaderBotComponent
        },
});
</script>