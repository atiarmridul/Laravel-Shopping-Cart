<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath'     => 'public/images/hp1.jpg',
            'title'         => 'Harry Potter One',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'public/images/hp2.jpg',
            'title'         => 'Harry Potter Two',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'public/images/hp3.jpg',
            'title'         => 'Harry Potter Three',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'public/images/hp4.jpg',
            'title'         => 'Harry Potter Four',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'public/images/hp2.jpg',
            'title'         => 'Harry Potter Five',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath'     => 'public/images/hp3.jpg',
            'title'         => 'Harry Potter Six',
            'description'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price'         => 10
        ]);
        $product->save();

    }
}
