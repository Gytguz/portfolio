<template>
    <div>
        <Head :title="title" />
    </div>
    <HeaderTopComponent />
    <NavbarComponent />
    <AlertComponent v-if="$page.props.alert.message" :alerts="$page.props.alert.message"/>
        <slot>
        </slot>
    <FooterComponent />
</template>


<script setup>
    import { Head } from "@inertiajs/vue3";
    import NavbarComponent from '@/Components/NavbarComponent.vue';
    import FooterComponent from '@/Components/FooterComponent.vue';
    import HeaderTopComponent from '@/Components/HeaderTopComponent.vue';
    import AlertComponent from '@/Components/AlertComponent.vue';

    defineProps({
        title: String,
        selectedCategory: String,
    })

</script>