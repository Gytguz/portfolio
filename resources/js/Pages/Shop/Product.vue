<template>
    <app-layout :title=" `Shop ${ product.name }` ">
        <HeaderBotComponent/>
        <div class="flex justify-center">
            <div class="container flex flex-col sm:flex-row justify-center">
                <div class="flex flex-col pt-10">
                    <div class="border-2  sm:mr-10 hidden md:block ">
                        <div v-for="index in 4" :key="index" class="relative p-3">
                            <img :src="product.image" :alt="product.name" class="w-full object-cover object-center hover:opacity-75 max-w-20">
                        </div>
                    </div>
                </div>
                <div class="relative mt-10 sm:my-10 flex justify-center hover:scale-110 transition duration-200 object-cover">
                    <div class="max-w-sm overflow-hidden">
                        <img :src="product.image" :alt="product.name" class="w-full object-cover object-center">
                    </div>
                </div>
    
                <div class="ml-10 mr-10 sm:mr-0 mt-10">
                    <div class="font-bold text-lg mb-4">
                        {{ product.name }}
                    </div>
                    <div class="mb-4">
                        <div class="font-bold text-red-500">
                            {{ product.price }} €
                        </div>
                        <p class="text-xxs">
                            Including VAT
                        </p>
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <label for="quantity" class="flex mr-2">Quantity </label>
                            <select class="flex w-full border bg-white rounded px-2 py-1 outline-none" tabindex="1" v-model="form.quantity">
                            <option :value="qty" :selected="qty === quantity" v-for="(qty, index) in product.quantity" :key="index"> {{ qty }} </option></select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button class="p-4 bg-zinc-800 text-orange-400 hover:text-zinc-500 w-full text-sm">
                            <span>Add to cart</span>
                        </button>
                    </div>

                    <div class="text-xs font-bold">
                        <div class="border p-2 flex flex-row">
                            <Icons name="delivery-truck" href="#"/>
                            <p class="ml-2">Standard delivery of 2-6 business days</p>
                        </div>
                        <div class="border border-t-0 p-2 flex flex-row">
                            <Icons name="delivery-box" href="#"/>
                            <p class="ml-2">Free shipping and free returns</p>
                        </div>
                        <div class="border border-t-0 p-2 flex flex-row">
                            <Icons name="delivery-return" href="#"/>
                            <p class="ml-2">100 days return policy</p>
                        </div>
                    </div>

                    <div class="my-4">
                        <div class="border p-2">
                            <p class="font-bold">Product Details</p>
                            <p>{{ product.details }}</p>
                        </div>
                        <div class="border border-t-0 p-2">
                            <p class="font-bold">Product Description</p>
                            <p class="max-w-sm">{{ product.description }}</p>
                        </div>
                        <div class="border border-t-0 p-2">
                            <p class="font-bold">Product Category</p>
                            <div class="flex flex-row">
                                <div v-for="category in categories">{{ category.name }}&nbsp</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-4 border-t-2 pt-4">
            <div class="container mx-auto">
                <div class="flex justify-center font-bold">
                    <span>Similar Products</span>
                </div>
                <div class="container flex flex-row justify-center py-4">
                    <ProductCardComponent :products="similarProducts" custom-classes="flex flex-row max-w-2xl p-10"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import Icons from '@/Components/Icons.vue';
import HeaderBotComponent from '@/Components/HeaderBotComponent.vue';
import ProductCardComponent from '@/Components/ProductCardComponent.vue';



export default defineComponent({
    props: {
        product: Object,
        categories: Array,
        similarProducts: Array,
    },
        components: {
            AppLayout,
            Icons,
            Link,
            HeaderBotComponent,
            ProductCardComponent,
        },

    data() {
        return {
            quantity: 1,
            form: this.$inertia.form({
                id: this.product.id,
                name: this.product.name,
                price: this.product.price,
                product_code: this.product.product_code,
                details: this.product.details,
                image: this.product.image,
                slug: this.product.slug,
                quantity: 1,
            })
        }
    },

});
</script>