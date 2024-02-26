<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Resources\ColorResource;
use App\Models\Color;
use Illuminate\Support\Facades\Validator;

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
        // Validate the request parameters
        $validator = Validator::make(['color' => $color], [
            'color' => 'required|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        try {
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
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
