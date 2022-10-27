<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name'=>'Narwan',
            'username'=>'narwan',
            'email'=>'Narwanibo11@gmail.com',
            'password'=>bcrypt('ibo123')
        ]);

       /* User::create([
            'name'=>'Alif',
            'email'=>'Alif@gmail.com',
            'password'=>bcrypt('Alif123')
        ]);*/

        User::factory(3)->create();

        Category::create([
            'name'=> 'Programming',
            'slug'=> 'perogramming'
        ]);
        Category:: create([
            'name'=>'Web Desain',
            'slug'=>'web-desain',
        ]);

       
        post::factory(20)->create();

        /*Post::create([
            'title'=> 'Judul Kedua',
            'category_id'=>1,
            'user_id'=>2,
            'slug'=> 'judul-lima',
            'excerpt'=> 'Lorem ipsum dolor sit amet kelima',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium inventore esse, sapiente voluptas nemo eligendi saepe placeat, ullam, voluptatibus similique vero. Maiores excepturi quasi quod, iste quisquam eligendi expedita!</p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In repellendus, vero, assumenda illo nam commodi laboriosam fuga, ex nesciunt magnam expedita minus architecto doloremque at et praesentium. Rerum, ea perferendis!</p>'
        ]);

        Post::create([
            'title'=> 'Judul Kedua',
            'category_id'=>2,
            'user_id'=>1,
            'slug'=> 'judul-kedua',
            'excerpt'=> 'Lorem ipsum dolor sit amet kelima',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium inventore esse, sapiente voluptas nemo eligendi saepe placeat, ullam, voluptatibus similique vero. Maiores excepturi quasi quod, iste quisquam eligendi expedita!</p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In repellendus, vero, assumenda illo nam commodi laboriosam fuga, ex nesciunt magnam expedita minus architecto doloremque at et praesentium. Rerum, ea perferendis!</p>'
        ]);

        Post::create([
            'title'=> 'Judul Ketiga',
            'category_id'=>2,
            'user_id'=>2,
            'slug'=> 'judul-Ketiga',
            'excerpt'=> 'Lorem ipsum dolor sit amet kelima',
            'body'=> '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum accusantium inventore esse, sapiente voluptas nemo eligendi saepe placeat, ullam, voluptatibus similique vero. Maiores excepturi quasi quod, iste quisquam eligendi expedita!</p><p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. In repellendus, vero, assumenda illo nam commodi laboriosam fuga, ex nesciunt magnam expedita minus architecto doloremque at et praesentium. Rerum, ea perferendis!</p>'
        ]);*/




    }
}
