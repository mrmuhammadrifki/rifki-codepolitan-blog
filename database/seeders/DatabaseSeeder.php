<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Muhammad Rifki',
            'username' => 'muhammadrifki',
            'email' => 'immuhammadrifki@gmail.com',
            'password' => bcrypt('brb1234')
        ]);

        // User::create([
        //     'name' => 'Sri Wahyuni',
        //     'email' => 'sriw@gmail.com',
        //     'password' => bcrypt('brb1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'Bussines',
            'slug' => 'bussines',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama Saya',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama-saya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi, dignissimos sed! Debitis quasi est voluptate architecto minus a voluptatum nam placeat at aliquam, ipsa consectetur reprehenderit adipisci, excepturi amet! Perspiciatis ducimus reiciendis veniam similique eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis sequi facere illum exercitationem animi tenetur, delectus, sit expedita beatae pariatur ut officia nam optio.</p><p>Architecto unde mollitia dolorem expedita quos quod porro omnis itaque eos, ratione quas numquam necessitatibus molestiae sed debitis voluptas dolores facere tempore eaque perspiciatis! Esse dicta accusamus atque voluptate doloribus est reiciendis amet nisi dolor facilis, eum unde numquam dolorem suscipit veritatis ab laboriosam reprehenderit id, exercitationem quod fuga nihil molestiae.</p><p>Ipsam accusamus esse error fugiat laudantium facilis deleniti temporibus accusantium earum impedit? Commodi, doloribus. Unde, debitis voluptas sint assumenda soluta commodi iste repellendus recusandae cumque nobis neque odit minima, molestias dolor. Aliquid, expedita quasi? Non facere vel nam sapiente unde, temporibus repudiandae, esse nobis labore, laboriosam provident accusantium. Sequi ea natus qui nihil fugit facere animi. Quia rerum sequi rem.</p><p>ipsum dolor sit, amet consectetur adipisicing elit. Sint soluta fugiat enim beatae dolores fuga perspiciatis ab quisquam expedita quaerat.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua Saya',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua-saya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi, dignissimos sed! Debitis quasi est voluptate architecto minus a voluptatum nam placeat at aliquam, ipsa consectetur reprehenderit adipisci, excepturi amet! Perspiciatis ducimus reiciendis veniam similique eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis sequi facere illum exercitationem animi tenetur, delectus, sit expedita beatae pariatur ut officia nam optio.</p><p>Architecto unde mollitia dolorem expedita quos quod porro omnis itaque eos, ratione quas numquam necessitatibus molestiae sed debitis voluptas dolores facere tempore eaque perspiciatis! Esse dicta accusamus atque voluptate doloribus est reiciendis amet nisi dolor facilis, eum unde numquam dolorem suscipit veritatis ab laboriosam reprehenderit id, exercitationem quod fuga nihil molestiae.</p><p>Ipsam accusamus esse error fugiat laudantium facilis deleniti temporibus accusantium earum impedit? Commodi, doloribus. Unde, debitis voluptas sint assumenda soluta commodi iste repellendus recusandae cumque nobis neque odit minima, molestias dolor. Aliquid, expedita quasi? Non facere vel nam sapiente unde, temporibus repudiandae, esse nobis labore, laboriosam provident accusantium. Sequi ea natus qui nihil fugit facere animi. Quia rerum sequi rem.</p><p>ipsum dolor sit, amet consectetur adipisicing elit. Sint soluta fugiat enim beatae dolores fuga perspiciatis ab quisquam expedita quaerat.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga Saya',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ketiga-saya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi, dignissimos sed! Debitis quasi est voluptate architecto minus a voluptatum nam placeat at aliquam, ipsa consectetur reprehenderit adipisci, excepturi amet! Perspiciatis ducimus reiciendis veniam similique eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis sequi facere illum exercitationem animi tenetur, delectus, sit expedita beatae pariatur ut officia nam optio.</p><p>Architecto unde mollitia dolorem expedita quos quod porro omnis itaque eos, ratione quas numquam necessitatibus molestiae sed debitis voluptas dolores facere tempore eaque perspiciatis! Esse dicta accusamus atque voluptate doloribus est reiciendis amet nisi dolor facilis, eum unde numquam dolorem suscipit veritatis ab laboriosam reprehenderit id, exercitationem quod fuga nihil molestiae.</p><p>Ipsam accusamus esse error fugiat laudantium facilis deleniti temporibus accusantium earum impedit? Commodi, doloribus. Unde, debitis voluptas sint assumenda soluta commodi iste repellendus recusandae cumque nobis neque odit minima, molestias dolor. Aliquid, expedita quasi? Non facere vel nam sapiente unde, temporibus repudiandae, esse nobis labore, laboriosam provident accusantium. Sequi ea natus qui nihil fugit facere animi. Quia rerum sequi rem.</p><p>ipsum dolor sit, amet consectetur adipisicing elit. Sint soluta fugiat enim beatae dolores fuga perspiciatis ab quisquam expedita quaerat.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat Saya',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat-saya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi, dignissimos sed! Debitis quasi est voluptate architecto minus a voluptatum nam placeat at aliquam, ipsa consectetur reprehenderit adipisci, excepturi amet! Perspiciatis ducimus reiciendis veniam similique eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis sequi facere illum exercitationem animi tenetur, delectus, sit expedita beatae pariatur ut officia nam optio.</p><p>Architecto unde mollitia dolorem expedita quos quod porro omnis itaque eos, ratione quas numquam necessitatibus molestiae sed debitis voluptas dolores facere tempore eaque perspiciatis! Esse dicta accusamus atque voluptate doloribus est reiciendis amet nisi dolor facilis, eum unde numquam dolorem suscipit veritatis ab laboriosam reprehenderit id, exercitationem quod fuga nihil molestiae.</p><p>Ipsam accusamus esse error fugiat laudantium facilis deleniti temporibus accusantium earum impedit? Commodi, doloribus. Unde, debitis voluptas sint assumenda soluta commodi iste repellendus recusandae cumque nobis neque odit minima, molestias dolor. Aliquid, expedita quasi? Non facere vel nam sapiente unde, temporibus repudiandae, esse nobis labore, laboriosam provident accusantium. Sequi ea natus qui nihil fugit facere animi. Quia rerum sequi rem.</p><p>ipsum dolor sit, amet consectetur adipisicing elit. Sint soluta fugiat enim beatae dolores fuga perspiciatis ab quisquam expedita quaerat.</p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kelima Saya',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kelima-saya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima quas reprehenderit quasi, dignissimos sed! Debitis quasi est voluptate architecto minus a voluptatum nam placeat at aliquam, ipsa consectetur reprehenderit adipisci, excepturi amet! Perspiciatis ducimus reiciendis veniam similique eos.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem perferendis sequi facere illum exercitationem animi tenetur, delectus, sit expedita beatae pariatur ut officia nam optio.</p><p>Architecto unde mollitia dolorem expedita quos quod porro omnis itaque eos, ratione quas numquam necessitatibus molestiae sed debitis voluptas dolores facere tempore eaque perspiciatis! Esse dicta accusamus atque voluptate doloribus est reiciendis amet nisi dolor facilis, eum unde numquam dolorem suscipit veritatis ab laboriosam reprehenderit id, exercitationem quod fuga nihil molestiae.</p><p>Ipsam accusamus esse error fugiat laudantium facilis deleniti temporibus accusantium earum impedit? Commodi, doloribus. Unde, debitis voluptas sint assumenda soluta commodi iste repellendus recusandae cumque nobis neque odit minima, molestias dolor. Aliquid, expedita quasi? Non facere vel nam sapiente unde, temporibus repudiandae, esse nobis labore, laboriosam provident accusantium. Sequi ea natus qui nihil fugit facere animi. Quia rerum sequi rem.</p><p>ipsum dolor sit, amet consectetur adipisicing elit. Sint soluta fugiat enim beatae dolores fuga perspiciatis ab quisquam expedita quaerat.</p>'
        // ]);
    }
}
