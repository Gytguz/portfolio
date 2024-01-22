<template>
    <div class="bg-zinc-800 flex justify-center">
      <div class="container text-center text-orange-400 font-semibold px-4 py-4">
        <p> {{ randomQuote }} </p>
      </div>
    </div>
</template>


<script setup>
  import { ref, computed } from 'vue';
  import quotes from '@/quotes';

  const quotesList = ref(quotes);

  const randomQuote = computed(() => {
    return quotesList.value[Math.floor(Math.random() * quotesList.value.length)];
  });

</script>