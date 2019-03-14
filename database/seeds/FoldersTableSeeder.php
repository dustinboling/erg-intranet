<?php

use Illuminate\Database\Seeder;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('folders')->insert([
            ['id' => 1,'name' => 'Agent Resources', 'folder_id' => null, 'description' => " "],
            ['id' => 2,'name' => 'Business Planning', 'folder_id' => null, 'description' => " "],
            ['id' => 3,'name' => 'Scripts', 'folder_id' => null, 'description' => " "],
            ['id' => 4,'name' => 'Training', 'folder_id' => null, 'description' => " "],
            ['id' => 5,'name' => 'Top Level', 'folder_id' => null, 'description' => " "],
            ['id' => 6,'name' => 'Level 1', 'folder_id' => 5, 'description' => " "],
            ['id' => 7,'name' => 'Level 2', 'folder_id' => 6, 'description' => " "],
            ['id' => 8,'name' => 'Level 3', 'folder_id' => 7, 'description' => " "],
            ['id' => 9,'name' => 'Checklists', 'folder_id' => 1, 'description' => " "],
            ['id' => 10,'name' => 'General Forms', 'folder_id' => 1, 'description' => " "],
            ['id' => 11,'name' => 'Headshots', 'folder_id' => 1, 'description' => " "],
            ['id' => 12,'name' => 'Infographics', 'folder_id' => 1, 'description' => " "],
            ['id' => 13,'name' => 'Logos', 'folder_id' => 1, 'description' => " "],
            ['id' => 14,'name' => 'Vendor Directory', 'folder_id' => 2, 'description' => " "],
            ['id' => 15,'name' => 'Buyer Workshop Scripts', 'folder_id' => 3, 'description' => " "],
            ['id' => 16,'name' => '2016 Audio Training', 'folder_id' => 4, 'description' => " "],
            ['id' => 17,'name' => 'Cole Realty Resource Tutorials', 'folder_id' => 4, 'description' => " "],
        ]);
    }
}
