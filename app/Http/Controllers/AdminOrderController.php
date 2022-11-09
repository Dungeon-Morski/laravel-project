<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOrderController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function ordersShow(Order $order)
    {
        return view('admin.orders', compact('order'));
    }

    public function show(Product $product)
    {
        return view('admin.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Product $product)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'price' => 'integer',
            'country_of_origin' => 'string',
            'year_of_release' => 'string',
            'model' => 'string',
            'quantity' => 'integer',
            'is_published' => 'bool',
            'image' => 'file',
        ]);
        $data['image'] = Storage::put('public', $data['image']);
        $product->update($data);
        return redirect()->route('admin.products', compact('product'));

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products');
    }

    public function category()
    {
        $categories = Category::all();

        return view('admin.categories-show', compact('categories'));
    }

    public function categoryAdd()
    {
        return view('admin.categories-add');
    }

    public function categoryStore()
    {
        $data = request()->validate([
            'title' => 'string',
        ]);
        Category::create($data);
        return redirect()->route('admin.categories-show');
    }

    public function categoryDestroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories-show');
    }

    public function productCreate()
    {
        return view('admin.create');
    }

    public function productStore()
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'price' => 'integer',
            'country_of_origin' => 'string',
            'year_of_release' => 'string',
            'model' => 'string',
            'quantity' => 'integer',
            'is_published' => 'bool',
            'image' => 'file',
        ]);

        $data['image'] = Storage::put('public', $data['image']);
        Storage::disk('public')->put('example.txt',  $data['image']);

        Product::create($data);
        return redirect()->route('admin.products');
    }
}
