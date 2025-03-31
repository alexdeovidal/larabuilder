<?php
namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Floral Maxi Dress', 'price' => 49.99, 'description' => 'A beautiful floral maxi dress for summer occasions.']);
        Product::create(['name' => 'Casual T-Shirt', 'price' => 19.99, 'description' => 'Comfortable cotton t-shirt with a stylish design.']);
        Product::create(['name' => 'High-Waisted Jeans', 'price' => 39.99, 'description' => 'Trendy high-waisted jeans perfect for any outfit.']);
        Product::create(['name' => 'Leather Jacket', 'price' => 89.99, 'description' => 'Stylish leather jacket for a chic look.']);
        Product::create(['name' => 'Knee-Length Skirt', 'price' => 34.99, 'description' => 'Elegant knee-length skirt suitable for office wear.']);
        Product::create(['name' => 'Summer Sandals', 'price' => 29.99, 'description' => 'Comfortable sandals for warm weather.']);
        Product::create(['name' => 'Sporty Hoodie', 'price' => 39.99, 'description' => 'Cozy hoodie ideal for casual outings.']);
        Product::create(['name' => 'Evening Gown', 'price' => 129.99, 'description' => 'Stunning evening gown for formal events.']);
        Product::create(['name' => 'Denim Jacket', 'price' => 49.99, 'description' => 'Classic denim jacket, a must-have in every wardrobe.']);
        Product::create(['name' => 'Chiffon Blouse', 'price' => 29.99, 'description' => 'Lightweight chiffon blouse, perfect for layering.']);
        Product::create(['name' => 'Sports Leggings', 'price' => 34.99, 'description' => 'Flexible and comfortable leggings for workouts.']);
        Product::create(['name' => 'Winter Coat', 'price' => 149.99, 'description' => 'Warm winter coat to keep you cozy during cold days.']);
        Product::create(['name' => 'Printed Jumpsuit', 'price' => 59.99, 'description' => 'Fashionable jumpsuit with a unique print.']);
        Product::create(['name' => 'Silk Scarf', 'price' => 19.99, 'description' => 'Elegant silk scarf to accessorize any outfit.']);
        Product::create(['name' => 'Belted Trench Coat', 'price' => 89.99, 'description' => 'Stylish belted trench coat for a classic look.']);
    }
}