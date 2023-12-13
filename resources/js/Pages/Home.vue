<template>
    <app-layout title="Home">
        <HeroComponent />
        <h1 class="text-red-500 font-bold">Content here</h1>

    </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import HeroComponent from '@/Components/HeroComponent.vue';

export default defineComponent({
    props: {
        products: Array,
    },
    components: {
    AppLayout,
    HeroComponent,
},
});
</script>
