<template>
    <div class="flex items-center mt-4 mx-4 justify-between w-1/2">
        <span class="flex items-center">
            <a href="/">Home</a>
            <slot></slot>
        </span>
        <div class="ml-4">
            Search
        </div>
    </div>

    <div class="ml-4 mt-4 w-7">
        <Icons name="back" href="javascript:history.back()" class="w-10"/>
    </div>
</template>


<script setup>
    import Icons from '@/Components/Icons.vue';


</script>