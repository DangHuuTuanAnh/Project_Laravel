<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([

    		//Điện thoại->apple->Iphone11 series:
    		['name'=>'Iphone 11 Chính hãng(VN/A)','slug'=>'iphone-11','origin_price'=>21990000,'sale_price'=>18290000,'category_id'=>7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Iphone 11 Pro Max Chính hãng(VN/A)','slug'=>'iphone-11-pro-max','origin_price'=>33990000,'sale_price'=>28590000,'category_id'=>7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Iphone 11 Pro Chính hãng(VN/A)','slug'=>'iphone-11-pro','origin_price'=>23990000,'sale_price'=>20690000,'category_id'=>7,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		
    		//Điện thoại->samsung
    		['name'=>'Samsung Galaxy Note 10','slug'=>'sam-sung-galaxy-note-10','origin_price'=>22990000,'sale_price'=>15990000,'category_id'=>12,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Samsung Galaxy S20+ (Plus)','slug'=>'samsung-galaxy-s20+','origin_price'=>23990000,'sale_price'=>19990000,'category_id'=>12,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Samsung Galaxy A71','slug'=>'samsung-galaxy-a71','origin_price'=>10490000,'sale_price'=>9290000,'category_id'=>12,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],

    		//Điện thoại->Vsmart:
    		['name'=>'Vsmart Active 3 6GB Ram','slug'=>'vsmart-active-3','origin_price'=>4000000,'sale_price'=>3990000,'category_id'=>16,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Vsmart Joy 3 2GB','slug'=>'vsmart-joy-3','origin_price'=>3000000,'sale_price'=>2290000,'category_id'=>16,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
    		['name'=>'Vsmart Live 6GB','slug'=>'vsmart-live','origin_price'=>4200000,'sale_price'=>3790000,'category_id'=>16,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],

    	]);
    }
}
