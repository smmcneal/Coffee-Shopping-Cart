<?php

Use App\Product;
Use Illuminate\Http\Request;
Use App\Http\Requests;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://i.pinimg.com/originals/6b/dd/7b/6bdd7b009568945fd543ab95d7f3291a.jpg',
            'title' => 'Penny Cup',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 15
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://static1.squarespace.com/static/56d9e7c8044262e05dc31d91/t/5878ee982e69cf9bec9520ad/1484320447131/Mountain+Air+Ethiopia+Gedeb',
            'title' => 'Mountain Air',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 14
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.dynamiteroasting.com/wp-content/uploads/2014/04/EthiopiaSidamo_r-400x600.jpg',
            'title' => 'Dynamite Roasting',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://res.cloudinary.com/simpleview/image/fetch/c_pad,f_auto,h_450,q_60,w_600/https://res.cloudinary.com/simpleview/image/upload/crm/asheville/asheville-coffee-roasters1_6585d73f-5056-a36a-0a4d6a30b1b275c2.jpg',
            'title' => 'Pitbull Roasters',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 16
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://i1.wp.com/rvfamilytravelatlas.com/wp-content/uploads/2015/02/IMG_53221.jpg',
            'title' => 'Turnstile Coffee',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 12
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/31YJI5-1I2L.jpg',
            'title' => 'Counter Culture',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce egestas tellus quis leo viverra tincidunt. Fusce iaculis malesuada enim at pulvinar. Nam sodales diam nisi, eu varius diam tincidunt eget. Nullam in ante vulputate, imperdiet orci a, egestas nisl.',
            'price' => 15
        ]);
        $product->save();
    }
}
