<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'OSDHA',
                'enum' => 'osdha',
                'full_name' => 'Organisai Darul Huffadh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'Persidha',
                'enum' => 'persidha',
                'full_name' => 'Persatuan Silat Darul Huffadh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'Pramuka',
                'enum' => 'pramuka',
                'full_name' => 'Pondok Pesantren Darul Huffadh 77',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'The Jour',
                'enum' => 'thejour',
                'full_name' => 'Pondok Pesantren Darul Huffadh 77',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'Karisdha',
                'enum' => 'karisdha',
                'full_name' => 'Pondok Pesantren Darul Huffadh 77',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
        ];

        foreach ($datas as $data) {
            DB::table('kulikulers')->insert($data);
        }
    }
}
