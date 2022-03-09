<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    //
    public function index(){

        $search = \Request::get('s');
        $store = Store::orderBy('created_at','asc')
        ->where("name","LIKE","%{$search}%")
        ->paginate(5)
        ->toArray();
        return array_reverse($store);

        // $store = Store::orderBy('created_at','desc')
        // ->get();
        // return $store;
    }

    public function add(Request $request){
        try {

            $store = new Store();
            $store->name = $request->name;
            //$store->images = $generated_new_name;
            $store->amount = $request->amount;
            $store->price_buy = $request->price_buy;
            $store->price_sell = $request->price_sell;
            $store->save();

            $success = true;
            $message = 'ບັນທຶກຂໍ້ມູນ ສຳເລັດ!';
        } catch (\Illuminate\Database\QueryException $ex) {
            $success = false;
            $message = $ex->getMessage();
        }

        // response
        $response = [
            'success' => $success,
            'message' => $message,
        ];
        return response()->json($response);
    }

    public function edit($id){

        $store = Store::find($id);
        return response()->json($store);

    }

    public function update($id, Request $request){

     
                $store = Store::find($id);
               // return $store;
                $store->update([
                            'name' => $request->name,
                            'amount' => $request->amount,
                            'price_buy' => $request->price_buy,
                            'price_sell' => $request->price_sell
                        ]);

            

    }

    public function delete($id){

        $store = Store::find($id);
        $store->delete();


    }
 


}
