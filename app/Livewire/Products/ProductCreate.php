<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $name;

    public $detail;

    public function render()
    {
        return view('livewire.products.product-create');
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Product::create([
            'name' => $this->name,
            'detail' => $this->detail,
        ]);

        return to_route('products.index')->with('success', 'User created successfully.');
    }
}
