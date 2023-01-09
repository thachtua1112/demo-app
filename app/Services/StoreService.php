<?php

namespace App\Services;

use App\Models\Store;

class StoreService
{
    /**
     * @param $searchName, $searchAddress, $page, $limit
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function listStore($searchName, $searchAddress, $page=1, $limit=10)
    {
        $stores = new Store;
        if ($searchName) {
            $stores = $stores->where('store_name', 'like', '%' . $searchName . '%');
        }
        if ($searchAddress) {
            $stores = $stores->where('address', 'like', '%' . $searchAddress . '%');
        }
        return $stores->offset(($page - 1) * $limit)
            ->limit($limit)
            ->get();
    }
}
