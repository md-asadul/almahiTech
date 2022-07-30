<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
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
                'title' => 'IT System Administration Training for IT Help Desk Engineer',
                'post_category_id' => 1,
                'cover_image' => 'cover_image',
                'cover_image_sm' => 'cover_image',
                'cover_image_md' => 'cover_image',
                'description' => 'Do you want to improve your career in Information Technology? Do you want to start building your IT career with solid knowledge? You are in the right place! Wondering why? This video will be of a good guideline to you.',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'Recruitment: IT Basics for IT Recruiters',
                'post_category_id' => 1,
                'cover_image' => 'cover_image',
                'cover_image_sm' => 'cover_image',
                'cover_image_md' => 'cover_image',
                'description' => 'In this course, I will share with you all of the knowledge and insight I have picked up as an IT Recruiter working within an international environment. As far as I know by myself that an official IT language is quite dry and yes, even, boring and sometimes hard to follow for a non-IT person, I have tried to make this course as easy to understand (using a lot of practical examples) as it is practically possible.',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'Line By Line Resume Writing: Write A Resume & Cover Letter',
                'post_category_id' => 1,
                'cover_image' => 'cover_image',
                'cover_image_sm' => 'cover_image',
                'cover_image_md' => 'cover_image',
                'description' => 'The course will also show you how to make your resume highly discoverable on job sites, and how to have a professional-looking cover letter.',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'Career Coaching: Life Coach Certification (Accredited)',
                'post_category_id' => 1,
                'cover_image' => 'cover_image',
                'cover_image_sm' => 'cover_image',
                'cover_image_md' => 'cover_image',
                'description' => 'Students who complete this course will receive an official life coach CERTIFICATION from Transformation Academy. This course is also accredited by internationally recognized Continuing Professional Development Standards Agency (Provider No: 50134), and 10 CPD/CEU credits are available upon request.',
                'created_by' => '1',
                'updated_by' => '1'
            ],
            [
                'title' => 'Management Consulting Cases for Job Interview',
                'post_category_id' => 1,
                'cover_image' => 'cover_image',
                'cover_image_sm' => 'cover_image',
                'cover_image_md' => 'cover_image',
                'description' => 'Getting into consulting is one of the most difficult tasks. It’s not only very selective but also quite a tough and long recruitment process. You will have at least 5 job interviews, spend on average 2-3 months in recruiting process and your chances of succeeding will be around 5-10%.  I will help you significantly boost the odds in your favor.',
                'created_by' => '1',
                'updated_by' => '1'
            ],
        ];

        foreach($datas as $data)
        {
            Post::create($data);
        }
    }
}
