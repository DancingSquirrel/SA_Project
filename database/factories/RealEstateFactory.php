<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tambon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class RealEstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ["house","townhouse","land"];
        $room = ["1","2","3","4","4+"];
        $status = ["pubilc","private","in progress","complete"];
        $x = random_int(1,7493);
        $a = (string) rand(10, 99);
        $b = (string) rand(100000, 999999);
        $c = (string) rand(10, 99);
        $d = (string) rand(100000, 999999);
        return [
            
            'user_id' => random_int(1,6),
            'type' => $type[array_rand($type)],
            'status' => $status[array_rand($status)],
            'address' => fake()->name(),
            'province' => Tambon::find($x)->province,
            'amphoe' => Tambon::find($x)->amphoe,
            'tambon' => Tambon::find($x)->tambon,
            'coordinates' => "$a.$b, $c.$d",
            'area' => rand(15,200),
            'detail' => "dddddddddddddddddddddddddddd",
            'bedroom' => $room[array_rand($room)],
            'bathroom' =>  $room[array_rand($room)]
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
