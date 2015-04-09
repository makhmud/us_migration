<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Str;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $comment = new \App\Comment();

        for ($i = 0; $i < 10; $i++){
            $content = '';
            for($j = 0; $j<70; $j++){
                $content .= Str::random(8) . ' ';
            }
            $comment->insert([
                'name' => Str::random(5) . ' ' . Str::random(7),
                'content' => $content
            ]);
        }
	}

}
