<?php

namespace Database\Factories;

use App\Models\Areas;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreasFactory extends Factory
{
    
    protected $model = Areas::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
