<x-app-layout>


    <div class="max-w-7xl mx-auto">

        <div class="flex bg-orange-500 font-bold py-2 justify-center items-center">
            <span class="text-xs text-white">Rehut suoraan ovellesi - maksuton toimitus kaikkiin tilauksiin! Minimitilausmäärä 2 tuotetta.</span>
        </div>
        
        <x-carousel />
        
    </div>

    {{-- production introduce --}}
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="flex justify-around p-6 bg-white border-b border-gray-200 space-x-10">
                    
                    {{-- @each('components.product', $production, 'item', '') --}}
                    <x-productCard />
                </div>
            </div>
        </div>
    </div>

    {{-- Production List --}}
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm">
                <div class="flex justify-start p-6 space-x-2">
                    <x-productList />
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
