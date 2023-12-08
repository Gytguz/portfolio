<template>
    <div>
        <Head :title="title" />
    </div>
    <NavbarComponent />
    <slot></slot>
</template>


<script>
import { defineComponent } from 'vue';
import { Head, Link } from "@inertiajs/inertia-vue3";
import NavbarComponent from '@/Components/NavbarComponent.vue';


export default defineComponent({
    props: {
        title: String,
    },

    components: {
    Head,
    Link,
    NavbarComponent
}
})

</script>