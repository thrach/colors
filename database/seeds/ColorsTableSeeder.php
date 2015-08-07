<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsTableSeeder extends Seeder
{

    public function run()
    {
        Color::truncate();
        $trimmed = file(storage_path('colors.txt'), FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($trimmed as $line_num => $line) {
            if(!empty(rtrim($line))) {
                $string = explode(',',preg_replace('/\s+/', ',', htmlspecialchars($line)));
                Color::create([
                    'mouline' => (isset($string[0])) ? $string[0] : null,
                    'coton'   => (isset($string[1])) ? $string[1] : null,
                    'rayonne' => (isset($string[2])) ? $string[2] : null,
                    'retors'  => (isset($string[3])) ? $string[3] : null,
                    'laine'   => (isset($string[4])) ? $string[4] : null,
                    'medicis' => (isset($string[5])) ? $string[5] : null,
                    'broder'  => (isset($string[6])) ? $string[6] : null,
                ]);
            }


        }
    }

}