<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public static $products = [

        ['id' => '1', 'name' => 'TV', 'description' => 'Best TV', 'price' => '200'],

        ['id' => '2', 'name' => 'iPhone', 'description' => 'Best iPhone', 'price' => '50'],

        ['id' => '3', 'name' => 'Chromecast', 'description' => 'Best Chromecast', 'price' => '70'],

        ['id' => '4', 'name' => 'Glasses', 'description' => 'Best Glasses', 'price' => '120'],

    ];

    public function index(): View
    {

        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = ProductController::$products;

        return view('product.index')->with('viewData', $viewData);

    }

    public function show(string $id): View|RedirectResponse
    {
        $index = $id - 1;
        if (! isset(ProductController::$products[$index])) {
            return redirect()->route('home.index');
        }

        $viewData = [];
        $product = ProductController::$products[$index];
        $viewData['title'] = $product['name'].' - Online Store';
        $viewData['subtitle'] = $product['name'].' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);

    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);

    }

    public function save(Request $request)
    {

        $request->validate([

            'name' => 'required',
            'price' => 'required',

        ]);

        dd($request->all());

    }
}
