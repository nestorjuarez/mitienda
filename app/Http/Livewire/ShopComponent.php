<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.shop-component',['products' => Product::paginate(12)])->layout('layouts.base');
    }
}
