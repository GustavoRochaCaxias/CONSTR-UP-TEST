<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response() ->json(Product::all());
    }

    public function store(Request $request)
    {
        $validated = $request-> validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'marca' => 'nullable|string|max:255',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
        ]);

        $product = Product ::create ($validated);

        return response() ->json ($product, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return response()-> json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
          $validated = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'marca' => 'nullable|string|max:255',
            'preco' => 'sometimes|required|numeric|min:0',
            'estoque' => 'sometimes|required|integer|min:0',
        ]);

        $product->update($validated);

        return response()->json($product);

    }


    public function destroy(Product $product)
    {
         $product->delete();

        return response()->json(null, 204);
    }
}
