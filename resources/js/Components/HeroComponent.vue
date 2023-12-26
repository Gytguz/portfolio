<template>
    <div class="relative">
        <img src="/storage/images/hero_image.jpg" alt="Image cannot be found" class="relative object-cover h-96 w-full opacity-80">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="flex flex-col items-center justify-center space-y-4 sm:space-y-0 sm:space-x-4 sm:flex-row">
                <ButtonComponent :href="category.slug" as="href" class="w-full py-4 sm:py-4" v-for="category in categories" :key="category.id">
                    {{ category.name }}
                </ButtonComponent>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import ButtonComponent from './Buttons/ButtonComponent.vue';

export default defineComponent({

    props: {
        categories: Array,
    },

    components: {
        ButtonComponent,
    },

});
</script>