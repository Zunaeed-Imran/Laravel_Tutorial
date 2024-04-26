<?php

namespace App\Models;

class Listing
{
  public static function all()
  {
    return [
      [
        'id' => 1,
        'title' => '1st lsting',
        'description' => 'This is 1st description for my first laraval learning'
      ],
      [
        'id' => 2,
        'title' => '2nd lsting',
        'description' => 'This is 2nd description for my first laraval learning'
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
