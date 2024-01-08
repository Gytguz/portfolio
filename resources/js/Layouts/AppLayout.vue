<template>
    <div>
        <Head :title="title" />
    </div>
    <HeaderTopComponent />
    <NavbarComponent />
        <slot></slot>
    <FooterComponent />
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from "@inertiajs/vue3";
import NavbarComponent from '@/Components/NavbarComponent.vue';
import FooterComponent from '@/Components/FooterComponent.vue';
import HeaderTopComponent from '@/Components/HeaderTopComponent.vue';

export default defineComponent({
    props: {
        title: String,
        selectedCategory: String,
    },

    components: {
        Head,
        Link,
        NavbarComponent,
        FooterComponent,
        HeaderTopComponent,

    },
})

</script>