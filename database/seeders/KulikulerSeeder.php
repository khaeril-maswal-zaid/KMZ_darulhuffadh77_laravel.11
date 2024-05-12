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
                'full_name' => 'Pramuka Darul Huffadh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'D`Jour',
                'enum' => 'djour',
                'full_name' => 'D`Jour Darul Huffadh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
            [
                'name' => 'Seni',
                'enum' => 'seni',
                'full_name' => 'Seni Darul Huffadh',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quae obcaecati, soluta dolor est vitae eligendi iusto qui cumque hic, iure deserunt nemo maxime consequuntur mollitia id natus blanditiis possimus quis quasi. Placeat molestiae suscipit consequatur. Consectetur mollitia ipsam qui.',
            ],
        ];

        foreach ($datas as $data) {
            DB::table('kulikulers')->insert($data);
        }
    }
}
