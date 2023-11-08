<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function getIndex()
    {
        /*
        public function insertMeasurement(Request $request) {
        $neck = $request->input('neck');
        $arm_length = $request->input('arm_length');
        $chest = $request->input('chest');
        $stomach = $request->input('stomach');
        $seat = $request->input('seat');
        $shirt_length = $request->input('shirt_length');
        $shoulder = $request->input('shoulder');
        $arm = $request->input('arm');
        $bicep = $request->input('bicep');
        $wrist = $request->input('wrist');
        $data=array("neck"=>$neck,"arm_length"=>$arm_length,"chest"=>$chest,"stomach"=>$stomach,"seat"=>$seat,
                    "shirt_length"=>$shirt_length,"shoulder"=>$shoulder,"arm"=>$arm,"bicep"=>$bicep,"wrist"=>$wrist);
        DB::table('measurements')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
        }

        */
        /*
        $Filmler = Index::find(1) //first()
        $Filmler = Filmler::where('id', 1)->first();
        $Filmler = İndex::whereRaw('id=?', array(1))->first();
        $Filmler = IndexController::all();
        */
        $filmler = IndexController::all();
        return view('Index', array('adi', 'tarih', 'aciklama', 'afiş' => $filmler));
    }
}
