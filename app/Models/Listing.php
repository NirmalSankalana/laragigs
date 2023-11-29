<?php

namespace App\Models;

class Listing
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'But today, with GPT in the equation, we can rightfully ask this question again. We see all these fancy tweets and demos, but what does that mean for me as a developer today, right now, when I need to start a new full-stack web app? Do I really have to go through npm create vite my-new-app, and start with a blank page once again?'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'But today, with GPT in the equation, we can rightfully ask this question again. We see all these fancy tweets and demos, but what does that mean for me as a developer today, right now, when I need to start a new full-stack web app? Do I really have to go through npm create vite my-new-app, and start with a blank page once again?'
            ]
        ];
    }

    public static function find($id): array
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
