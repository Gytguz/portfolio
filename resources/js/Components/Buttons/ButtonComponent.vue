<template>
    <Link :href="href" :class="classes" v-if="as === 'href'">
        <slot></slot>
    </Link>
    <button :class="classes" v-else>
        <slot></slot>
    </button>
</template>

<script>
import { defineComponent } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Link,
        },

        props: [
            'active', 
            'href',
            'as',
        ],

        computed: {
            classes() {
                return `justify-center inline-flex items-center px-4 py-2 
                border border-transparent rounded-md tracking-widest transition bg-orange-400 text-zinc-800`
            }
        }
    })

</script>