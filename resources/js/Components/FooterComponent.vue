<template>
    <div class="bg-stone-200 ">
      <div class="text-center text-stone-900 px-4 py-4">
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