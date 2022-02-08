<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productCard extends Component
{
    private $data = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->data = [
            [
                'imageUrl' => 'https://norrahorse.fi/media/wysiwyg/Karri-poni_Erika_Krista_Heikkil__500x260.jpg',
                'title' => 'NORRA-REHUT RATKAISIVAT PONIN RUOKINTAONGELMAN',
                'description' => 'Ruokinnalla on iso merkitys hevosten hyvinvoinnille ja erityisesti ruokintahaasteissa tämä näkyy todella selvästi. Erika Ahtiainen jaksoi väsymättä etsiä Karri-ponilleen sopivaa rehustusta ja viimein Norra-rehujen myötä tilanne alkoi korjaantumaan.',
                'link' => '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/wysiwyg/Norra_ade_vitamiini_hevosille_500x260.jpg',
                'title' => 'ADE-VITAMIINILISÄ ON TALVELLA TARPEEN',
                'description' => 'Hevonen tarvitsee talvella vitamiinilisän, sillä sisäruokintakauden ja pimeän vuodenajan aikana vitamiinien saanti laskee merkittävästi. Norra ADE-vitamiinilisä takaa hevosen riittävän vitamiininsaannin myös talviaikaan.',
                'link' => '/'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.big-product-card', ['data'=>$this->data]);
    }
}
