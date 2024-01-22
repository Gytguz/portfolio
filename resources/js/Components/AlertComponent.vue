<template>
    <div v-show="elementVisible" class="absolute grid w-full place-items-center justify-center pt-10 z-50">
        <div class="p-5 border-[1px] border-black rounded-[10px] bg-zinc-800">
            <div class="font-bold text-orange-400">
                {{ alerts }}
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

    defineProps({
        alerts: String,
    })

    const elementVisible = ref(true);
    setTimeout(() => elementVisible.value = false, 3000)

</script>