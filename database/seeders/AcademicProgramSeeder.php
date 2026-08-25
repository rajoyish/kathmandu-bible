<?php

namespace Database\Seeders;

use App\Models\AcademicProgram;
use Illuminate\Database\Seeder;

class AcademicProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Certificate in Theology',
                'slug' => 'certificate-in-theology-c-th',
                'badge_title' => 'C. Th.',
                'badge_color' => 'blue', // bg-blue-600
                'language' => 'Nepali',
                'description' => 'The Certificate in Theology is a one-year, non-residential program offered in Nepali. Classes are held twice a week, with each session lasting three hours. The program runs throughout the year.',
                'purpose' => "This program is for local church members, both men and women, who haven't attended school or college but want to study the Bible, do evangelism, and support church missions. The main goal is to train new Christians to become effective lay ministers for the church and community.\n\nThe program covers twelve different subjects, each requiring 2 credit hours to complete.",
                'vision' => "We aim to see every lay believer become an effective instrument of God's mission.",
                'credits' => '24 credits',
                'admission_requirements' => [
                    "Must be a born-again Christian with a strong faith in the Lord and a passion for God's missions.",
                    "Must be fluent in reading and writing Nepali.",
                    "Must have a recommendation letter from a local church.",
                ],
                'admission_process' => [
                    "To get an application form, contact the office.",
                    "Fill out the application form and submit it to the registrar's office with the required documents.",
                    "Pay the application and registration fees during admission.",
                ],
                'order_column' => 1,
            ],
            [
                'title' => 'Diploma in Theology',
                'slug' => 'diploma-in-theology-dip-th',
                'badge_title' => 'DIP. TH.',
                'badge_color' => 'purple', // bg-purple-600
                'language' => 'Nepali',
                'description' => 'The Diploma in Theology is a two-year program offered in Nepali. It is a non-residential course with classes taught in a modular system. Each month focuses on one subject, with classes held twice a week, three hours per day.',
                'purpose' => 'This program is designed for lay leaders in local churches who do not have formal education but are involved in ministry. It provides basic knowledge of the Bible, theology, mission, history, inductive interpretation methods, sermon preparation and delivery, church planting, church governance and administration, evangelism, discipleship, and leadership.',
                'vision' => 'Our goal is to have trained grassroots leaders in every local church across the country.',
                'credits' => '48 credits',
                'admission_requirements' => [
                    "Must be a born-again Christian with a strong faith in the Lord and a passion for God's missions.",
                    "Must be fluent in reading and writing Nepali.",
                    "Must have a recommendation letter from a local church.",
                ],
                'admission_process' => [
                    "To get an application form, contact the office.",
                    "Fill out the application form and submit it to the registrar's office with the required documents.",
                    "Pay the application and registration fees during admission.",
                ],
                'order_column' => 2,
            ],
            [
                'title' => 'Bachelor of Theology',
                'slug' => 'bachelor-of-theology-b-th',
                'badge_title' => 'B. TH.',
                'badge_color' => 'amber', // bg-amber-600
                'language' => 'English',
                'description' => 'The Bachelor of Theology (B.Th.) program lasts for three years. It is a non-residential program taught in monthly modules, with one subject covered each month. Classes are conducted in English.',
                'purpose' => "This program aims to help local churches in the country by educating men and women called to serve. It provides a strong foundation in theology and related subjects, enabling them to effectively participate in God's Missions.",
                'vision' => 'We envision trained leaders in every church across the nation who are dedicated to building both the body of Christ and society, equipped with biblical, theological, and missional knowledge.',
                'credits' => '108 credits',
                'admission_requirements' => [
                    "Be a born-again Christian, baptized, and involved in ministry.",
                    "Have completed at least 10+2 education.",
                    "Be able to communicate in English.",
                    "Demonstrate good character and commitment to serving the Lord.",
                    "Have a recommendation from their local church.",
                ],
                'admission_process' => [
                    "To get an application form, contact the office.",
                    "Fill out the application form and submit it to the registrar's office with the required documents.",
                    "Pay the application and registration fees during admission.",
                ],
                'order_column' => 3,
            ],
            [
                'title' => 'Master of Arts in Christian Missions',
                'slug' => 'm-a-in-christian-missions',
                'badge_title' => 'M.A. Christian Missions',
                'badge_color' => 'emerald', // bg-emerald-500
                'language' => 'English',
                'description' => 'The Master of Arts in Christian Missions is a two-year program. It uses a module system where one subject is taught each month. This is a non-residential program, and classes are conducted in English.',
                'purpose' => 'This program aims to train and equip Christian ministers in Nepal, especially pastors and leaders who want to continue their ministry while pursuing advanced studies in Christian missions. It provides a solid foundation in various biblical theologies of mission and related disciplines.',
                'vision' => "We envision trained missional leaders with advanced knowledge and skills, and a strong sense of God's mission. These leaders will guide, empower, and mobilize the church across the nation.",
                'credits' => '72 credits',
                'admission_requirements' => [
                    "Must be a born-again Christian with a vibrant faith and a passion for God's missions.",
                    "A Bachelor's degree in any field (B.Th., B.A., BBS, B.Sc., B.SW).",
                    "Minimum of 4-6 years of ministry experience.",
                    "Proficiency in English.",
                    "Recommendation from a local church.",
                ],
                'admission_process' => [
                    "To get an application form, contact the office.",
                    "Fill out the application form and submit it to the registrar's office with the required documents.",
                    "Pay the application and registration fees during admission.",
                ],
                'order_column' => 4,
            ],
        ];

        foreach ($programs as $program) {
            AcademicProgram::create($program);
        }
    }
}
