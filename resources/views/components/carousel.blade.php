{{-- 图片轮播 --}}
<div id="carousel" class="relative" data-ride="carousel">
    {{-- 图片列表 --}}
    <div class="w-full h-90 overflow-hidden">
        <div class="">
            <img src="./storage/images/2.jpg" class="w-full" alt="...">
        </div>

        <div class="hidden">
            <img src="./storage/images/8.jpg" class="w-full" alt="...">
        </div>
      
        <div class="hidden">
            <img src="./storage/images/3.jpg" class="w-full" alt="...">
        </div>
    </div>

    {{-- 指示器 --}}
    <ol class="absolute bottom-2 inset-x-0 flex justify-center space-x-3 text-white">
        <li class="inline-block rounded-full w-5 h-5 bg-gray-200" data-slide-to="0" class="w-5 active"></li>
        <li class="inline-block rounded-full w-5 h-5 bg-gray-200" data-slide-to="1" class="w-5"></li>
        <li class="inline-block rounded-full w-5 h-5 bg-gray-200" data-slide-to="2" class="w-5"></li>
    </ol>

    {{-- 上下页 --}}
    <a class="absolute inset-y-1/2 left-2 text-white" href="#carousel">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
    </a>
    <a class="absolute inset-y-1/2 right-2 text-white" href="#carousel">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
    </a>
    
</div>