<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\ColorResource;
use App\Models\Color;

class ColorApiController extends Controller
{

    /**
     * Get the color
     *
     * @param string $color
     * @return mixed
     */
    public function getColor(string $color): mixed
    {
        //check if the color is in the list of colors
        $color = Color::where('name', strtolower($color))->first();

        //return the message if not found
        if (!$color) {
            return [
                'message' => 'Color not found'
            ];
        }

        //return the color if found
        return new ColorResource($color);
    }
}
