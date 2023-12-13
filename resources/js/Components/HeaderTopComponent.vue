<template>
    <div class="py-2">
        <div class="flex flex-row justify-center">
            <div class="flex flex-row w-1/2 align-middle sm:justify-center justify-start pl-4">
                <div class="px-2  border-solid border-black">
                    <Icons name="envelope" href="contact"/>
                </div>
                <div>gytguz@gmail.com</div>
            </div>

            <div class="flex flex-row w-1/2 sm:justify-center justify-end pr-4">
                <div class="px-2">
                    <Icons name="linkedin" href="https://www.linkedin.com/in/gytguz"/>
                </div>
                <div class="px-2">
                    <Icons name="github" href="https://github.com/Gytguz/"/>
                </div>
                <div class="px-2">
                    <Icons name="facebook" href="https://www.facebook.com/gu.gytis"/>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import Icons from '@/Components/Icons.vue';

export default defineComponent({
    components: {
        Icons,
    }
});

</script>