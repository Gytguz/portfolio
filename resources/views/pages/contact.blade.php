<x-layout>
    <div class="p-10 max-w-lg mx-auto mt-24">
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Contact Us!
                        </h2>
                        <p class="mb-4">
                            Transform your ideas into reality. Reach out to discuss your project and enhance your online presence.
                        </p>
                    </header>

                    {{-- <form method="POST" action="{{ route('contact.submit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label
                                for="name"
                                class="inline-block text-lg mb-2"
                                >Name
                            </label>
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"
                                placeholder="Your name"
                                value="{{old('name')}}"
                            />

                            @error('name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >Contact Email</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                placeholder="example@example.com"
                                value="{{old('email')}}"
                            />

                            @error('email')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>



                        <div class="mb-6">
                            <label
                                for="message"
                                class="inline-block text-lg mb-2"
                            >
                                Message
                            </label>
                            <textarea
                            class="border border-gray-200 rounded p-2 w-full"
                            name="message"
                            rows="10"
                            placeholder="Share details about your project or any questions you have for us."
                        >{{ old('message') }}</textarea>

                            @error('message')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>

                        <div class="mb-6">
                            <button
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Submit
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                    </form> --}}
                </div>
</x-layout>