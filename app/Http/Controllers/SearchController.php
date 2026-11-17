<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $q = trim($request->input('q', ''));
        $products = collect();

        if ($q !== '') {
            [$keyword, $maxPrice] = $this->parseQuery($q);

            // Controller meminta data ke Model
            $products = Product::search($keyword, $maxPrice)->get();
        }

        // Data dikembalikan ke View
        return view('search.index', [
            'products' => $products,
            'q'        => $q,
        ]);
    }

    /**
     * Memecah "Sepatu under 2 juta" menjadi ["Sepatu", 2000000].
     */
    private function parseQuery(string $q): array
    {
        $maxPrice = null;

        if (preg_match('/\bunder\s+(\d+(?:[.,]\d+)?)\s*(juta|jt|ribu|rb)?/i', $q, $m)) {
            $number = (float) str_replace(',', '.', $m[1]);
            $unit   = strtolower($m[2] ?? '');

            $maxPrice = match ($unit) {
                'juta', 'jt' => (int) ($number * 1_000_000),
                'ribu', 'rb' => (int) ($number * 1_000),
                default      => (int) $number,
            };

            // Hapus bagian "under ..." dari keyword
            $q = trim(str_replace($m[0], '', $q));
        }

        return [$q, $maxPrice];
    }
}
