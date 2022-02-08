<?php

namespace App\View\Components;

use Illuminate\View\Component;

class productList extends Component
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
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/924651.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/924641.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/924631.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/924620.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/924610.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
            ],
            [
                'imageUrl' => 'https://norrahorse.fi/media/catalog/product/9/2/923884.jpg?quality=80&bg-color=255,255,255&fit=bounds&height=300&width=240&canvas=240:300', 
                'name' => 'NORRA PURE PROTEIN 20 KG TÄYDENNYSREHU', 
                'price' => '1.0', 
                'extra' => 'Sis.ALV:n(14%)', 
                'link'=> '/'
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
        return view('components.product-list', ['data' => $this->data]);
    }
}
