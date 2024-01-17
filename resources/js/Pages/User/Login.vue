<template>
  <app-layout :title="'Login'">
      <section class="">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto h-[75vh] sm:h-screen lg:py-0">
          <div class="w-full rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 bg-zinc-800 border-orange-700">
            <div class="p-6 space-y-4">
                <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-orange-400">
                    Login to your account
                </h1>
                <form @submit.prevent="submit" class="space-y-4 md:space-y-6">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-orange-400">Your email</label>
                        <input type="email" name="email" id="email" v-model="form.email" autocomplete="new-password" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-zinc-700 border-gray-600 placeholder-orange-200 text-orange-400 focus:ring-blue-500 focus:border-blue-500" placeholder="name@example.com" required="">
                        <label v-if="errors.email> 0" class="text-sm text-red-500">{{ errors.email }}</label>
                        <div v-if="form.errors.email">{{ form.errors.email }}</div>
                        
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-orange-400">Password</label>
                        <input type="password" name="password" id="password" v-model="form.password" placeholder="••••••••" class="border sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-zinc-700 border-gray-600 placeholder-orange-200 text-orange-400 focus:ring-blue-500 focus:border-blue-500" required="">
                    </div>
                    <button type="submit" :disabled="form.processing" class="w-full text-orange-400 bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-bold hover:text-orange-200 rounded-lg text-sm px-5 py-2.5 text-center bg-primary-600 hover:bg-primary-700 focus:ring-primary-800">Log in</button>
                    <p class="text-sm font-light text-orange-200 dark:text-orange-200">
                        Don't have an account? <a :href="route('registerPage')" class="font-medium text-primary-600 underline hover:text-orange-400">Register here</a>
                    </p>
                </form>
            </div>
          </div>
        </div>
    </section>
  </app-layout>
</template>


<script setup>

import { router, useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({errors: Object})

  const form = useForm({
    email: null,
    password: null,
    remember: false,
  });

  function submit() {
    router.post('/users/authenticate', form)
  }

</script>
  