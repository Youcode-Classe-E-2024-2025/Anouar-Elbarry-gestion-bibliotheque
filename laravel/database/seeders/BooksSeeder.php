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
                'cover_img' => 'https://example.com/gatsby.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '1984',
                'desciption' => 'A dystopian social science fiction novel',
                'cover_img' => 'https://example.com/1984.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'desciption' => 'A novel about racial injustice in the American South',
                'cover_img' => 'https://example.com/mockingbird.jpg',
                'is_active' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
    }