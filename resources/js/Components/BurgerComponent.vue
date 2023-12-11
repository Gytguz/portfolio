<template>
    <div>{{ routes }}</div>
    <Link :href="route(routes)" class="hover:text-yellow-500 transition">
        {{ names }}
    </Link>




</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
    props: [
        'Link',
        'routes',
        'names',
    ],
});
</script>