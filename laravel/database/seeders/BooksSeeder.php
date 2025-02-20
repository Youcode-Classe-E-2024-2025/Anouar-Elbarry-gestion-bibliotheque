<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'desciption' => 'A novel about the decadence of the Jazz Age',
                'author' => 'ALberto',
                'price' => '67',
                'publication_year' => '1904',
                'available_copies' => '59',
                'cover_img' => 'https://marketplace.canva.com/EAFfSnGl7II/2/0/1003w/canva-elegant-dark-woods-fantasy-photo-book-cover-vAt8PH1CmqQ.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '1984',
                'desciption' => 'A dystopian social science fiction novel',
                'author' => 'Anouar',
                'price' => '58',
                'publication_year' => '2005',
                'available_copies' => '18',
                'cover_img' => 'https://images-platform.99static.com//-tUjEZmbTnIMpiyAMy6CiS85KYY=/137x101:962x926/fit-in/500x500/projects-files/101/10168/1016819/4d520fb3-bab8-4d4a-a209-17731bb9da86.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'desciption' => 'A novel about racial injustice in the American South',
                'author' => 'ronaldinho',
                'price' => '120',
                'publication_year' => '2016',
                'available_copies' => '35',
                'cover_img' => 'https://bukovero.com/wp-content/uploads/2016/07/Harry_Potter_and_the_Cursed_Child_Special_Rehearsal_Edition_Book_Cover.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
    }