<template>
    <Link :href="href" :class="classes" v-if="as === 'href'">
        <slot></slot>
    </Link>
    <button :class="classes" v-else>
        <slot></slot>
    </button>
</template>


<script setup>
    import { Link } from '@inertiajs/vue3';
    import { computed } from 'vue';

    defineProps({
        href: String,
        as: String,
    })

    const classes = computed(() => {
        return `justify-center inline-flex items-center px-4 py-2 
                border border-transparent rounded-md tracking-widest transition bg-orange-400 text-zinc-800
                hover:text-zinc-500`
    })

</script>