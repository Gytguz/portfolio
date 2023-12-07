<nav class="flex justify-between items-center" style="">
    <a 
        href="/" 
        class="relative inline-block">
            <img class="w-16 m-5 logo" src="{{ asset("images/shop_icon.png") }}" alt="Shop_icon" style="">
    </a> 
    <ul class="flex space-x-6 mr-6 text-lg text-gray-500">
        @if(Request::is('contact'))
        <li>
            <a 
                href="/" 
                class="hover:text-stone-700 pr-5">
                    Home
            </a>
        </li>
        @endif
        <li>
            <a 
                href="/contact" 
                class="hover:text-stone-700 pr-5">
                    <i class="fas fa-envelope"></i>
                    Contact Us
            </a>
        </li>
    </ul>
</nav>