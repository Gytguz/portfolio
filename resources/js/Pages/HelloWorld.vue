<template>
    <div>
        <ul>
            <li v-for="product in products" :key="product.id">
                {{ product.product_code }}
            </li>
        </ul>
        <h1>hello world!! vue inertia</h1>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: {
        products: Array,
    },
    components: {
        Head,
        Link,
    },
});
</script>
