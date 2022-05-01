<?php

namespace Database\Factories;

use App\Models\Session;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=CoachSession>
 */
class CoachSessionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'session_id' => $this->faker->randomElement(Session::all())['id'],
            'staff_id' => $this->faker->randomElement(Staff::where('role', 'coach')->get())['id']
        ];
    }
}
