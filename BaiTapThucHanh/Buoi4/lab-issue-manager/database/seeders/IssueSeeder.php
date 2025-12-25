<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Issue;
use Faker\Factory as Faker;

class IssueSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            Issue::create([
                'computer_name' => 'PC-' . $faker->numberBetween(1, 50),
                'version' => 'v' . $faker->numberBetween(1, 5),
                'reporter' => $faker->name(),
                'reported_at' => $faker->dateTimeThisYear(),
                'severity' => $faker->randomElement(['Nhẹ', 'Trung bình', 'Nghiêm trọng']),
                'status' => $faker->randomElement(['Mới', 'Đang xử lý', 'Đã xong']),
            ]);
        }
    }
}
