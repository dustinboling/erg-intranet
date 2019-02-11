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
        // Insert the Root Folder
        DB::table('folders')->insert([
            'name' => 'Root Folder',
            'folder_id' => 1,
            'description' => "This is the Root Folder that contains all other folders.",
        ]);
    }
}