<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([

        	//Danh mục điện thoại:
  			['name'=>'điện thoại','slug'=>'dien_thoai','parent_id'=>0,'depth'=>0,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục điện thoại Apple:
  			['name'=>'Apple','slug'=>'apple','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục con:
  			['name'=>'Iphone XS| XS Max','slug'=>'iphone_xs_max','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Iphone 11| 11 Pro | 11 Pro Max','slug'=>'iphone_11_series','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Iphone X| XR','slug'=>'iphone_x','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Iphone 8| 8 Plus','slug'=>'iphone_8','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Iphone 7| 7 Plus','slug'=>'iphone_7','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Iphone 6S| 6S Plus','slug'=>'iphone_7','parent_id'=>2,'depth'=>2,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],

  			//Danh mục điện thoại SamSung:
  			['name'=>'SamSung','slug'=>'sam_sung','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục điện thoại OPPO:
  			['name'=>'OPPO','slug'=>'oppo','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục điện thoại REALME:
  			['name'=>'REALME','slug'=>'realme','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục điện thoại XIAOMI:
  			['name'=>'XIAOMI','slug'=>'xiaomi','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục điện thoại VSMART:
  			['name'=>'VSMART','slug'=>'vsmart','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			
  			//Danh mục tablet:
  			['name'=>'Tablet','slug'=>'tablet','parent_id'=>0,'depth'=>0,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			//Danh mục con:
  			['name'=>'IPad Pro','slug'=>'ipad_pro','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'IPad Air','slug'=>'ipad_air','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'IPad Mini','slug'=>'ipad_mini','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Samsung','slug'=>'tablet_samsung','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			['name'=>'Huawei','slug'=>'tablet_huawei','parent_id'=>1,'depth'=>1,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
  			
  			//Danh mục phụ kiện:
  			['name'=>'Phụ kiện','slug'=>'phu_kien','parent_id'=>0,'depth'=>0,'created_at'=>\Carbon\Carbon::now(),'updated_at'=>\Carbon\Carbon::now()],
        ]);
    }
}
