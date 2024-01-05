<?php
// database/seeders/MenuSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu; // Adjust this path based on your actual model location

class MenuTableSeeder extends Seeder
{
    public function run()
    {
        Menu::create(['title' => 'Home', 'url' => '/', 'meta_title' => 'Home page', 'meta_description' => 'Home Meta description']);
        Menu::create(['title' => 'Buy', 'url' => '/buy', 'meta_title' => 'Buy properties', 'meta_description' => 'Buy Properties in Australia']);
       Menu::create(['title' => 'Rent', 'url' => '/rent','meta_title' => 'Rent properties', 'meta_description' => 'Rent properties in australia']);
        Menu::create(['title' => 'Sold', 'url' => '/sold','meta_title' => 'Sold properties', 'meta_description' => 'Sold properties in Australia']);
        Menu::create(['title' => 'New Homes', 'url' => '/new-homes','meta_title' => 'New Homes', 'meta_description' => 'New Homes in Australia']);
        Menu::create(['title' => 'Find Agent', 'url' => '/find-agent','meta_title' => 'Find Agents', 'meta_description' => 'Find agents in australia']);
        Menu::create(['title' => 'News', 'url' => '/news', 'meta_title' => 'News', 'meta_description'=>'News articles']);
        Menu::create(['title' => 'About', 'url' => '/about','meta_title' => 'About us', 'meta_description' => 'About us our company values, mission, vision']);
       
        // Add more menu items as needed
    }
}
