<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione repellat, consequuntur dolor earum error pariatur, sed atque temporibus iusto necessitatibus, eum ipsa. Placeat autem, similique vel facilis enim amet.'
            ],
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ratione repellat, consequuntur dolor earum error pariatur, sed atque temporibus iusto necessitatibus, eum ipsa. Placeat autem, similique vel facilis enim amet.'
            ],
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
