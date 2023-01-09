<?php

namespace App\Services;

use App\Models\Product;
use DB;

class ProductService
{
    /**
     * @param $searchName, $searchAmount, $page, $limit
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function listProduct($searchName, $searchAmount, $page=1, $limit=10)
    {
        $products = new Product;
        if ($searchName) {
            $products = $products->where('product_name', 'like', '%' . $searchName . '%');
        }
        if ($searchAmount) {
            $products = $products->where('amount', $searchAmount);
        }
        return $products->offset(($page - 1) * $limit)->limit($limit)->get();
    }
}
