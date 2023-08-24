<?php

  namespace App\Models;

  class Listing {
    public static function all() {
      return [
        [
            'id' => 1,
            'title' => 'Testing 1',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Amet exercitationem dolores id molestiae cupiditate soluta aliquid quaerat
            quasi vero error iste labore earum, temporibus repudiandae quod? Inventore
            illum laboriosam repellat?'
        ],
        [
            'id' => 2,
            'title' => 'Testing 2',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Amet exercitationem dolores id molestiae cupiditate soluta aliquid quaerat
            quasi vero error iste labore earum, temporibus repudiandae quod? Inventore
            illum laboriosam repellat?'
        ],
        [
            'id' => 3,
            'title' => 'Testing 3',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Amet exercitationem dolores id molestiae cupiditate soluta aliquid quaerat
            quasi vero error iste labore earum, temporibus repudiandae quod? Inventore
            illum laboriosam repellat?'
        ]
      ];
    }

    public static function find($id){
      $listings = self::all();

      foreach($listings as $listing) {
        if($listing['id'] == $id) {
          return $listing;
        }
      }
    }
  }