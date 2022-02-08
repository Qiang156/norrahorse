<x-app-layout>


    <div class="max-w-7xl mx-auto">

        <div class="flex bg-orange-500 font-bold py-2 justify-center items-center">
            <span class="text-xs text-white">Rehut suoraan ovellesi - maksuton toimitus kaikkiin tilauksiin! Minimitilausmäärä 2 tuotetta.</span>
        </div>
        
        <x-carousel />
        
    </div>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="flex justify-around p-6 bg-white border-b border-gray-200 space-x-10">
                    <div class="border">
                        <div class="flex justify-center"><img src="https://norrahorse.fi/media/wysiwyg/Karri-poni_Erika_Krista_Heikkil__500x260.jpg" class="h-90"></div>
                        <div class="text-xl text-center uppercase">NORRA-REHUT RATKAISIVAT PONIN RUOKINTAONGELMAN</div>
                        <div class="border">Ruokinnalla on iso merkitys hevosten hyvinvoinnille ja erityisesti ruokintahaasteissa tämä näkyy todella selvästi. Erika Ahtiainen jaksoi väsymättä etsiä Karri-ponilleen sopivaa rehustusta ja viimein Norra-rehujen myötä tilanne alkoi korjaantumaan.</div>
                        <a href="#">Lue lisää...</a>
                    </div>
                    
                    <div class="border">
                        <div class="flex justify-center"><img src="https://norrahorse.fi/media/wysiwyg/Norra_ade_vitamiini_hevosille_500x260.jpg" class="h-90"></div>
                        <div class="text-xl text-center uppercase">ADE-VITAMIINILISÄ ON TALVELLA TARPEEN</div>
                        <div class="border">Hevonen tarvitsee talvella vitamiinilisän, sillä sisäruokintakauden ja pimeän vuodenajan aikana vitamiinien saanti laskee merkittävästi. Norra ADE-vitamiinilisä takaa hevosen riittävän vitamiininsaannin myös talviaikaan.</div>
                        <a href="#">Lue lisää...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Production List --}}
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm">
                <div class="flex justify-around p-6 bg-white border-b border-gray-200">
                    <div class="bg-gray-500">
                        <div><img src=""></div>
                        <div>title</div>
                        <div>description</div>
                    </div>
                    
                    <div class="bg-gray-500">
                        <div><img src=""></div>
                        <div>title</div>
                        <div>description</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
