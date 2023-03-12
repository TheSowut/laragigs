<?php

namespace App\Models;

class ListingOld
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'ListingOld One',
                'description' => 'lorem ipsum '
            ],
            [
                'id' => 2,
                'title' => 'ListingOld Two',
                'description' => 'lorem ipsum '
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
