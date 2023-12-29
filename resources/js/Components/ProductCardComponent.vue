<template>
    <div class="bg-white"> 
            <div :class="customClasses ? customClasses : 'mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8'">
                <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                    <Link v-for="product in products" :href="`/shop/product/${product.id}`" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img :src="product.image" :alt="product.name" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <h3 class="mt-4 text-gray-700">{{ product.name }}</h3>
                        <p class="mt-1 text-sm font-medium text-gray-900">{{ product.price }}€</p>
                    </Link>
                </div>
            </div>
    </div>



</template>
  
  
<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        products: Array,
        customClasses: String,
    },

    components: {
            Link
    },
});
</script>