<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $product;

    public $name;

    public $detail;

    public function render()
    {
        return view('livewire.products.product-edit');
    }

    public function mount($id): void
    {
        $this->product = Product::findOrFail($id);
        $this->name = $this->product->name;
        $this->detail = $this->product->detail;
    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $this->product->name = $this->name;
        $this->product->detail = $this->detail;
        $this->product->save();

        return to_route('products.index')->with('success', 'Product updated successfully.');
    }
}
