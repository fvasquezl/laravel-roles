<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.products.product-index', compact('products'));
    }

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return to_route("products.index")->with('success', 'Product deleted successfully.');
    }
}
