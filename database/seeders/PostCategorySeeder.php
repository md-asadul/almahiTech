<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;
class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [
                'name' => 'IT Training in Database Administration',
                'slug' => 'IT Training in Database Administration',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'IT Training on Wide-Ranging Crash Programs',
                'slug' => 'IT Training on Wide-Ranging Crash Programs',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Resume Build/Update',
                'slug' => 'Resume Build/Update',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Interview Preparation and Coaching',
                'slug' => 'Interview Preparation and Coaching',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'name' => 'Consulting and Job Placement',
                'slug' => 'Consulting and Job Placement',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            
        ];

        foreach($datas as $data)
        {
            PostCategory::create($data);
        }
    }
}
