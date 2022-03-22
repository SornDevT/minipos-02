<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Transection;
use Intervention\Image\Facades\Image;

class StoreController extends Controller
{
    //
    public function index(){

        $search = \Request::get('s');
        $store = Store::orderBy('created_at','asc')
        ->where("name","LIKE","%{$search}%")
        ->paginate(15)
        ->toArray();
        return array_reverse($store);

        // $store = Store::orderBy('created_at','desc')
        // ->get();
        // return $store;
    }

    public function pos(){

        $search = \Request::get('s');
        $store = Store::orderBy('created_at','desc')
        ->where("name","LIKE","%{$search}%")
        ->paginate(15)
        ->toArray();
        return array_reverse($store);
    }

    public function add(Request $request){
        try {

            if($request->file('file')){
                $upload_path = "assets/img";
                $generated_new_name = time().'.'.$request->file->getClientOriginalExtension();
                $image = $request->file('file');
                $img = Image::make($image->getRealpath());
                $img->resize(800, null, function ($constraint){
                    $constraint->aspectRatio();
                });
                $img->save($upload_path.'/'.$generated_new_name);
            } else {
                $generated_new_name = '';

            }

            $store = new Store();
            $store->name = $request->name;
            $store->images = $generated_new_name;
            $store->amount = $request->amount;
            $store->price_buy = $request->price_buy;
            $store->price_sell = $request->price_sell;
            $store->save();
            $product_id = $store->id;


            /// ບັນທຶກລາຍຈ່າຍ

            $tran = Transection::all()->sortByDesc('id')->take(1)->toArray();
                $number = 1;
                foreach($tran as $new)
                {
                    $number = $new['tran_id'];
                }
                if($number!=''){
                    $number1 = str_replace("INC","",$number);
                    $number2 = str_replace("EXP","",$number1);
                    $number = (int)$number2+1;
                    $length = 5;
                    $number = substr(str_repeat(0, $length).$number, - $length);
                }

                if($request->acc_type=='income'){ $tnum = 'INC'; }
                elseif($request->acc_type=='expense'){ $tnum = 'EXP'; }

                $tran = new Transection();
                $tran->tran_id = $tnum.$number;
                $tran->product_id = $product_id;
                $tran->tran_type = $request->acc_type;
                $tran->tran_detail = 'ນຳເຂົ້າສິນໃໝ່: '.$request->name;
                $tran->amount = $request->amount;
                $tran->price = $request->price_buy*$request->amount;
                $tran->save();

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


            if($request->file('file')){
                $upload_path = 'assets/img';
                if($store->images!='' && $store->images!=null){
                    if(file_exists('assets/img/'.$store->images)){
                        unlink('assets/img/'.$store->images);
                    }
                }


                $generated_new_name = time().'.'.$request->file->getClientOriginalExtension();
                $image = $request->file('file');
                $img = Image::make($image->getRealpath());
                $img->resize(800, null, function ($constraint){
                    $constraint->aspectRatio();
                });
                $img->save($upload_path.'/'.$generated_new_name);

                $store->update([
                    'name' => $request->name,
                    'images' => $generated_new_name,
                    'amount' => $request->amount,
                    'price_buy' => $request->price_buy,
                    'price_sell' => $request->price_sell
                ]);

            } else {

                $store->update([
                    'name' => $request->name,
                    'amount' => $request->amount,
                    'price_buy' => $request->price_buy,
                    'price_sell' => $request->price_sell
                ]);
            }
     
                
   
            

    }

    public function delete($id){

        $store = Store::find($id);
        $store->delete();


    }
 


}
