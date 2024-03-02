<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'sales_id' => 'required|string|unique:vendas',
            'amount' => 'required|numeric',
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:celulares,id',
            'products.*.amount' => 'required|integer|min:1',
        ]);

        $venda = Venda::create([
            'sales_id' => $request->sales_id,
            'amount' => $request->amount,
        ]);

        foreach ($request->products as $product) {
            $venda->produtos()->attach($product['product_id'], ['amount' => $product['amount']]);
        }

        return response()->json($venda, 201);
    }

    public function index()
    {
        $vendas = Venda::with('produtos')->get();
        return response()->json($vendas);
    }

    public function show($id)
    {
        $venda = Venda::with('produtos')->findOrFail($id);
        return response()->json($venda);
    }

    public function destroy($id)
    {
        $venda = Venda::findOrFail($id);
        $venda->delete();
        return response()->json(['message' => 'Venda cancelada com sucesso']);
    }

    public function addProdutos(Request $request, $id)
    {
        $request->validate([
            'products' => 'required|array',
            'products.*.product_id' => 'required|exists:celulares,id',
            'products.*.amount' => 'required|integer|min:1',
        ]);

        $venda = Venda::findOrFail($id);

        foreach ($request->products as $product) {
            $venda->produtos()->attach($product['product_id'], ['amount' => $product['amount']]);
        }

        return response()->json($venda, 201);
    }
}
