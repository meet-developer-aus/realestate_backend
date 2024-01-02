<?php
// database/seeders/MenuSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu; // Adjust this path based on your actual model location

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        Menu::create(['title' => 'Home', 'url' => '/']);
        Menu::create(['title' => 'About', 'url' => '/about']);
        // Add more menu items as needed
    }
}
