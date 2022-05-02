<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ListaComponent extends Component
{
    use WithPagination;

    public function render()
    {

        return view('livewire.lista-component',['products' => Product::Paginate(6)])->layout('layouts.base');
    }
}
