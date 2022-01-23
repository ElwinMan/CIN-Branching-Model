<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::insert([
            'question' => "Waarvoor is dit website gemaakt?",
            'answer' => "Omdat het voor CIN moet.",
        ]);
    }
}
