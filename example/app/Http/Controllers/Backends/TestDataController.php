<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class TestDataController extends Controller
{
    public function test(){
        // get all data; => array of object
        DB::table('products')->get();

        // get first row => object
        DB::table('products')->first();

        // get only column name of all data => array of object
        DB::table('products')->select('name','price')->get();

        // get only column name of first row => object
        DB::table('products')->select('name')->first();

        //alias column name => object
        DB::table('products')->select('name as product_name')->first();

    }


    public function index1(){
        // get all data
        // $products = DB::table('products')->get();

        // foreach ($products as $index => $product) {
        //     $color = $index % 2 == 0 ? 'yellow' : 'pink';

        //     echo "<div style='padding: 10px; background-color: $color'>";
        //         echo "<u>";
        //             echo "<li>". $product->name ."</li>";
        //             echo "<li>". $product->price ."</li>";
        //         echo "</u>";
        //     echo "</div>";
        // }

        // $pro = DB::table('jobs')->first();
        // if($pro){
        //     dd($pro->id);
        // }

        // $jobs = DB::table('jobs')->get();
        // foreach ($jobs as $index => $job) {
        //     $color = $index % 2 == 0 ? 'yellow' : 'pink';
        //     echo "<div style='padding: 10px; background-color: $color'>";
        //         echo "<u>";
        //             echo "<li>". $job->id ."</li>";
        //         echo "</u>";
        //     echo "</div>";
        // }


        // $products = DB::table('products')->select('name as product_name')->first();
        // dd($products->product_name);


    }

    public function index(){
    //    $data = DB::select('SELECT * FROM products limit 1');

        $data = DB::table('products')
            ->select(
                'name',
                'price',
                DB::raw('IF(price <= 15,"promotion price", "standard price") as type')
            )
            ->get();


        $data2 = DB::select(
            '
                SELECT
                    name,price,
                    IF(price <= :myTypeA, "promotion price", "standard price") as type,
                    IF(price <= :myTypeB, "yes", "no") as type_2
                FROM products
            '
        , [
            'myTypeA' => 15,
            'myTypeB' => 20,
        ]);

        // "
        //     SELECT
        //         name , price , created_at
        //     FROM products
        //     WHERE
        //             price > 15
        //         or
        //             created_at > '2024-08-01 18:56:10'

        // "


        $data3 = DB::table('products')
            ->where('price','>',15)
            ->orWhere('created_at','>', '2024-08-01 18:56:10')
            ->select('name','price','created_at')
            ->get();

            dd($data3);
    }
}
