<?php

namespace App\Http\Controllers;

use App\Models\DataMonthly;
use App\Models\DataUsage;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\DB;

class DataUsageController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth:api');
    }

    public function createDataUsages()
    {
        DataUsage::create([
            'usages' => request('usages'),
            'cost' => request('cost'),
            'id_user' => request('id_user')
        ]);

        return response()->json('Successfull create data usages', 200);
    }

    public function getDataUsageOneMonth($id)
    {
        // $id = 29;
        $id = Auth()->user()->id;

        $data = DataUsage::select(
            "id",
            DB::raw("SUM(usages) AS total_usages"),
            DB::raw("SUM(cost) AS total_cost"),
            "created_at")
            ->where('id_user', $id)
            ->orderBy('created_at', 'desc')
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
            ->paginate(5);

            $data->getCollection()->transform(function ($value) {
                // Your code here
                return [
                    'total_usages' => $value->total_usages,
                    'total_cost' => $value->total_cost,
                    'created_at' => $value->created_at,
                ];
            });
        return $data;
    }

    public function getDataLastMonthCurrentMonth($id)
    {
        try {
            $data = DataUsage::select(
                DB::raw("SUM(usages) AS total_usages"),
                DB::raw("SUM(cost) AS total_cost"),
                // DB::raw("LIMIT 2"),
                "created_at")
                ->where('id_user', $id)
                ->orderBy('created_at', 'desc')
                ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M')"))
                ->limit(2)
                ->get([
                    "id",
                    "total_usages",
                    "total_cost",
                    "created_at"
                ]);

            // $data->getCollection()->transform(function ($value) {
            //     // Your code here
            //     return $value;
            // });

            // dd($data[0]->created_at);
            if(count($data) == 2){
                if($data[0]['total_usages'] > $data[1]['total_usages']){
                    $data = [
                        "msg" => "Sepertinya penggunaan anda melebihi bulan kemarin!",
                        "data" => $data,
                        "count" => 2
                    ];
                }else if($data[0]['total_usages'] <= $data[1]['total_usages']){
                    $data = [
                        "msg" => "Penggunaan anda bulan ini lebih hemat, good job!", 
                        "data" => $data,
                        "count" => 2
                    ];
                }else{
                    $data = "Ada kesalahan";  
                }
            }else if(count($data) == 1){
                $data = [
                    "msg" => "Smarttandon, solusi hemat air tandon anda!", 
                    "data" => $data,
                    "count" => 1
                ];
            }else if(count($data) == 0){
                $data = [
                    "msg" => "Smarttandon, solusi hemat air tandon anda!", 
                    "data" => null,
                    "count" => 0
                ];
            }
        } catch (Exception $e) {
            $data = "$e";
        }
        
        return $data;
    }

    public function destroy(DataUsage $id){
        try {
            $id->delete();            
        } catch (Exception $e) {
            return response()->json('Ada yang salah', 500); 
        }

        return response()->json('deleted successfull', 200);
    }

    public function getPositionMonth(){
        $listMonth = [
            1 => [1, 2, 3],
            2 => [4, 5, 6],
            3 => [7, 8, 9],
            4 => [10, 11, 12]
        ];
        $now = Carbon::now()->month;
        foreach($listMonth as $month){
            foreach ($month as $key) {
                if ($now == $key) {
                    return array_search($month, $listMonth);
                }
                // return array_search($now, $month);

            }
        }
    }

    public function getThreeMonth($id_data){
        
        $null =  [];
        // $id = 29;
        $id = Auth()->user()->id;
        $listMonth = [
            1 => [1, 2, 3],
            2 => [4, 5, 6],
            3 => [7, 8, 9],
            4 => [10, 11, 12]
        ];
        $listNameMonth = [
            1 => "Jan",
            2 => "Feb",
            3 => "Mar",
            4 => "Apr",
            5 => "Mey",
            6 => "Jun",
            7 => "Jul",
            8 => "Aug",
            9 => "Sep",
            10 => "Okt",
            11 => "Nov",
            12 => "Des",
        ];
        foreach ($listMonth[$id_data] as $month) {
            if(!DataUsage::where('id_user','=', $id)->whereMonth('created_at', '=' ,  $month)->get()->first()){
                array_push($null, array_search($month, $listMonth[$id_data]));
            }
        }
        // $dateS = Carbon::now()->startOfMonth()->subMonth(3);
        // $dateE = Carbon::now()->startOfMonth(); 
        $data = DataUsage::select('usages','created_at')
        ->where('id_user', '=', $id)
        ->whereMonth('created_at', '>=' , $listMonth[$id_data][0])
        ->whereMonth('created_at', '<=' , $listMonth[$id_data][2])
        ->orderBy('created_at', 'asc')
        ->get()
        ->transform(function($data){
            // dd($data);
            return  [
                'total_usages' => $data->usages,
                'created_at' => explode('-', $data->created_at)[1] 
            ];
        })
        ->toArray();
        if(count($null) > 0){
            foreach ($null as $n) {
                // dd($n);
                array_splice($data, $n, 0, [[
                    "total_usages" => 0,
                    "created_at" => $listNameMonth[$listMonth[$id_data][$n]]
                ]]);
            }
        }

        return  response($data, 200);
    }
}
