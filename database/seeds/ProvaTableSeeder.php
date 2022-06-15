<?php

use App\Model\Prova;
use Illuminate\Database\Seeder;

class ProvaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provas = [
            [
                'price' => 1200,
                'state' => 'Italy',
                'city' => 'Rimini',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://siviaggia.it/wp-content/uploads/sites/2/2020/10/rimini-fuori-stagione.jpg',
                'is_availlable' => true,
                'date' => '15/07/2022 - 20/07/2022',
            ],
            [
                'price' => 1800,
                'state' => 'Italy',
                'city' => 'Sardegna',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://www.hotelpulicinu.com/images/rooms/exclusive-suite-vista-mare/1.jpg',
                'is_availlable' => false,
                'date' => '15/08/2022 - 20/08/2022',
            ],
            [
                'price' => 2800,
                'state' => 'Thailandia',
                'city' => 'Ko-samui',
                'post_code' => '00117',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://images.lonelyplanetitalia.it/static/places/thailandia-206.jpg?q=90&p=2400%7C1350%7Cmax&s=6334bd2e375ea4f1dd037488a3632fde',
                'is_availlable' => true,
                'date' => '15/07/2022 - 20/07/2022',
            ],
            [
                'price' => 1400,
                'state' => 'Italy',
                'city' => 'Arezzo',
                'post_code' => '52100',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim optio nemo, laboriosam quisquam recusandae ratione dolore exercitationem dolor quas dolorem labore voluptatum voluptate explicabo porro ut quam sit maiores vel.',
                'image' => 'https://www.visitarezzo.com/media/k2/items/cache/grande_L.jpg',
                'is_availlable' => false,
                'date' => '15/08/2022 - 20/08/2022',
            ],

         ];
 
         foreach ($provas as $prova) {
            $new_prova = new Prova();
            $new_prova->price = $prova['price'];
            $new_prova->state = $prova['state'];
            $new_prova->city = $prova['city'];
            $new_prova->post_code = $prova['post_code'];
            $new_prova->description = $prova['description'];
            $new_prova->image = $prova['image'];
            $new_prova->is_availlable = $prova['is_availlable'];
            $new_prova->date = $prova['date'];
            $new_prova->save();

        }
    }
}
