<template>
    <div class="bg-zinc-800 flex justify-center">
      <div class="container text-center text-orange-400 font-semibold px-4 py-4">
        <p> {{ randomQuote }} </p>
      </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import quotes from '@/quotes'

export default defineComponent({
    data() {
        return {
            quotes: quotes,
    };
  },
    computed: {
        randomQuote() {
            return this.quotes[Math.floor(Math.random() * this.quotes.length)];
        }
    }
});

</script>