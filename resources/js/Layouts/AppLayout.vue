<template>
    <div>
        <Head :title="title" />
    </div>
    <NavbarComponent />
    <slot></slot>
    <FooterComponent />
</template>


<script>
import { defineComponent } from 'vue';
import { Head, Link } from "@inertiajs/inertia-vue3";
import NavbarComponent from '@/Components/NavbarComponent.vue';
import FooterComponent from '@/Components/FooterComponent.vue';

export default defineComponent({
    props: {
        title: String,
    },

    components: {
    Head,
    Link,
    NavbarComponent,
    FooterComponent,
}
})

</script>