<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Announcement
{
    private static $announcement_post = [
        [
            'title'=>'JUDUL PENGUMUMAN PERTAMA',
            'slug'=>'judul-pengumuman-pertama',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis.',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo veniam expedita earum molestiae laborum aliquid. Quasi necessitatibus repudiandae expedita omnis aut commodi numquam ab deleniti, iste magnam debitis laboriosam architecto delectus neque quo, tempora facere optio tempore harum quia officiis! Sunt obcaecati eius sit fugit iste perspiciatis cupiditate recusandae, error tempore aspernatur, ex placeat dolorum suscipit pariatur. Vero quasi, ipsa illum fuga, autem nam quae, minus cum nesciunt eius dolor! Quasi maxime odio nisi autem corrupti voluptate, incidunt doloribus ad vel unde maiores quas? Blanditiis natus nisi fuga corporis necessitatibus ducimus aperiam maiores fugiat tenetur, sequi architecto, excepturi neque ex. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo veniam expedita earum molestiae laborum aliquid. Quasi necessitatibus repudiandae expedita omnis aut commodi numquam ab deleniti, iste magnam debitis laboriosam architecto delectus neque quo, tempora facere optio tempore harum quia officiis! Sunt obcaecati eius sit fugit iste perspiciatis cupiditate recusandae, error tempore aspernatur, ex placeat dolorum suscipit pariatur. Vero quasi, ipsa illum fuga, autem nam quae, minus cum nesciunt eius dolor! Quasi maxime odio nisi autem corrupti voluptate, incidunt doloribus ad vel unde maiores quas? Blanditiis natus nisi fuga corporis necessitatibus ducimus aperiam maiores fugiat tenetur, sequi architecto, excepturi neque ex. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis.',
            'created_at'=>'31-01-2024',
        ],
        [
            'title'=>'JUDUL PENGUMUMAN KEDUA',
            'slug'=>'judul-pengumuman-kedua',
            'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis.',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo veniam expedita earum molestiae laborum aliquid. Quasi necessitatibus repudiandae expedita omnis aut commodi numquam ab deleniti, iste magnam debitis laboriosam architecto delectus neque quo, tempora facere optio tempore harum quia officiis! Sunt obcaecati eius sit fugit iste perspiciatis cupiditate recusandae, error tempore aspernatur, ex placeat dolorum suscipit pariatur. Vero quasi, ipsa illum fuga, autem nam quae, minus cum nesciunt eius dolor! Quasi maxime odio nisi autem corrupti voluptate, incidunt doloribus ad vel unde maiores quas? Blanditiis natus nisi fuga corporis necessitatibus ducimus aperiam maiores fugiat tenetur, sequi architecto, excepturi neque ex. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo veniam expedita earum molestiae laborum aliquid. Quasi necessitatibus repudiandae expedita omnis aut commodi numquam ab deleniti, iste magnam debitis laboriosam architecto delectus neque quo, tempora facere optio tempore harum quia officiis! Sunt obcaecati eius sit fugit iste perspiciatis cupiditate recusandae, error tempore aspernatur, ex placeat dolorum suscipit pariatur. Vero quasi, ipsa illum fuga, autem nam quae, minus cum nesciunt eius dolor! Quasi maxime odio nisi autem corrupti voluptate, incidunt doloribus ad vel unde maiores quas? Blanditiis natus nisi fuga corporis necessitatibus ducimus aperiam maiores fugiat tenetur, sequi architecto, excepturi neque ex. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit, sapiente distinctio, at corporis repellat laudantium iure et nostrum dolores, natus expedita consequuntur fugit officia dolore minima? Quis nihil velit debitis.',
            'created_at'=>'31-01-2024',
        ],
    ];

    public static function all()
    {
        return collect(self::$announcement_post);
    }

    public static function find($slug)
    {
        $announcements = static::all();
        return $announcements->firstWhere('slug', $slug);
        
                // $announcement = [];
        // foreach($announcements as $anc){
        //     if($anc['slug'] == $slug){
        //         $announcement = $anc;
        //     }
        // }
    }
}
