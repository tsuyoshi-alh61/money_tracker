<?php

namespace Database\Factories;

use App\Models\MoneyHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MoneyHistory>
 */
class MoneyHistoryFactory extends Factory
{
    protected $model = MoneyHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'transaction_type' => $this->faker->name(),
            'amount' => '1000'
        ];
    }
}
