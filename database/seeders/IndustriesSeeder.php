<?php

namespace Database\Seeders;

use App\Models\industry;
use Illuminate\Database\Seeder;

class IndustriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries = [
            [
                "id" => 1,
                "name" =>  "Agriculture",
                "icon" =>  "frontend/assets/images/steps/industry/1.png",
                "created_by" => 1
            ],
            [
                "id" => 2,
                "name" =>  "Art & Photography",
                "icon" =>  "frontend/assets/images/steps/industry/2.png",
                "created_by" => 1
            ],
            [
                "id" => 3,
                "name" =>  "Construction",
                "icon" =>  "frontend/assets/images/steps/industry/3.png",
                "created_by" => 1
            ],
            [
                "id" => 4,
                "name" =>  "Account & Finance",
                "icon" =>  "frontend/assets/images/steps/industry/4.png",
                "created_by" => 1
            ],
            [
                "id" => 5,
                "name" =>  "Children",
                "icon" =>  "frontend/assets/images/steps/industry/5.png",
                "created_by" => 1
            ],
            [
                "id" => 6,
                "name" =>  "Religious",
                "icon" =>  "frontend/assets/images/steps/industry/6.png",
                "created_by" => 1
            ],
            [
                "id" => 7,
                "name" =>  "Fashion",
                "icon" =>  "frontend/assets/images/steps/industry/7.png",
                "created_by" => 1
            ],
            [
                "id" => 8,
                "name" =>  "Games",
                "icon" =>  "frontend/assets/images/steps/industry/8.png",
                "created_by" => 1
            ],
            [
                "id" => 9,
                "name" =>  "Health & Medical",
                "icon" =>  "frontend/assets/images/steps/industry/9.png",
                "created_by" => 1
            ],
            [
                "id" => 10,
                "name" =>  "Food",
                "icon" =>  "frontend/assets/images/steps/industry/10.png",
                "created_by" => 1
            ],
            [
                "id" => 11,
                "name" =>  "Travel & Tourism",
                "icon" =>  "frontend/assets/images/steps/industry/11.png",
                "created_by" => 1
            ],
            [
                "id" => 12,
                "name" =>  "Education",
                "icon" =>  "frontend/assets/images/steps/industry/12.png",
                "created_by" => 1
            ],
            [
                "id" => 13,
                "name" =>  "Pets & Animal",
                "icon" =>  "frontend/assets/images/steps/industry/13.png",
                "created_by" => 1
            ],
            [
                "id" => 14,
                "name" =>  "Home Services",
                "icon" =>  "frontend/assets/images/steps/industry/14.png",
                "created_by" => 1
            ],
            [
                "id" => 15,
                "name" =>  "Real Estate",
                "icon" =>  "frontend/assets/images/steps/industry/15.png",
                "created_by" => 1
            ],
            [
                "id" => 16,
                "name" =>  "Security",
                "icon" =>  "frontend/assets/images/steps/industry/16.png",
                "created_by" => 1
            ],
            [
                "id" => 17,
                "name" =>  "Law",
                "icon" =>  "frontend/assets/images/steps/industry/17.png",
                "created_by" => 1
            ],
            [
                "id" => 18,
                "name" =>  "Beauty & Spa",
                "icon" =>  "frontend/assets/images/steps/industry/18.png",
                "created_by" => 1
            ],
            [
                "id" => 19,
                "name" =>  "Creative",
                "icon" =>  "frontend/assets/images/steps/industry/19.png",
                "created_by" => 1
            ],
            [
                "id" => 20,
                "name" =>  "Sports",
                "icon" =>  "frontend/assets/images/steps/industry/20.png",
                "created_by" => 1
            ],
            [
                "id" => 21,
                "name" =>  "Science",
                "icon" =>  "frontend/assets/images/steps/industry/21.png",
                "created_by" => 1
            ],
            [
                "id" => 22,
                "name" =>  "Transport",
                "icon" =>  "frontend/assets/images/steps/industry/22.png",
                "created_by" => 1
            ],
            [
                "id" => 23,
                "name" =>  "Music",
                "icon" =>  "frontend/assets/images/steps/industry/23.png",
                "created_by" => 1
            ],
            [
                "id" => 24,
                "name" =>  "Other",
                "icon" =>  "frontend/assets/images/steps/industry/24.png",
                "created_by" => 1
            ]
        ];

        industry::insert($industries);
    }
}
