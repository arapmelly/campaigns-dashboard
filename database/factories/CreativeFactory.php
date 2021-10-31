<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Creative;
use File;

class CreativeFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Creative::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $filePath = storage_path('images');

        if(!File::exists($filePath)){
            File::makeDirectory($filePath);  
        }
        return [
            'name'=>$this->faker->text(10),
            'fileUrl' => $this->faker->image($filePath,400,300)
        ];
    }
}
