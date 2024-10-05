<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Reference;

class ReferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $root1 = Reference::create(['name' => 'Ramesh']);
        $child1 = Reference::create(['name' => 'Gaurav', 'parent_id' => $root1->id]);
        $child2 = Reference::create(['name' => 'Shalu', 'parent_id' => $root1->id]);

        $root2 = Reference::create(['name' => 'Deepu']);
        $child3 = Reference::create(['name' => 'Amit', 'parent_id' => $root2->id]);
        $grandchild1 = Reference::create(['name' => 'Sham Lal', 'parent_id' => $child3->id]);
        $child4 = Reference::create(['name' => 'Kapil', 'parent_id' => $root2->id]);

        $root3 = Reference::create(['name' => 'Prem Chopra']);
    }
}
