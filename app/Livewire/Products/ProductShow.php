<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductShow extends Component
{
    public $product;

    public function mount($id): void
    {
        $this->product = Product::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.products.product-show');
    }
}
