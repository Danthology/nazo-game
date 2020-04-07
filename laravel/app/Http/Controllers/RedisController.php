<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\facades\Response;
use Illuminate\Support\facades\Input;
use Illuminate\Support\Facades\Redis;
use DB;
use Cache;

class RedisController extends Controller
{
    public function test()
	{
		$dan=array('0'=>'level-1',
					'1'=>'level-2',
					'2'=>'level-3',
					'3'=>'level-4',
					'4'=>'level-5',
					'5'=>'uoos',
					'6'=>'none',
					'7'=>'awesome',
					'8'=>'nice',
					'9'=>'bloom_filter',
					'10'=>'dance_of_the_river_spirits',
					'11'=>'4.08kb',
					'12'=>'boinc',
					'13'=>'python',
					'14'=>'notre_dame_de_paris',
					'15'=>'spark',
					'16'=>'0xcccc',
					'17'=>'escape',
					'18'=>'deep_ones',
					'19'=>'blizzard',
					'20'=>'touhou_project');
		if (!session()->has('level')||session()->get('level',0) == 0) {
			return back();
		}
		else
		{
			$value = session()->get('level',1);
			return redirect($dan[$value-1]);
		}
	}

	public function HintDownload()
	{
		return response()->download('hint.txt');
	}
	public function sticky()
	{
		$sticky=session()->get('sticky');
		if (!session()->has('sticky') || $sticky == 0) {
			session()->put('sticky', 1);
			$count = 0;
		}
		else if($sticky == 1){
			$count = 1;
		}
		else if($sticky == 2 || $sticky == 3){
			$count = 2;
		}
		else if($sticky >= 4){
			$count = 3;
		}
		session()->put('sticky', $sticky+1);
		return view('level20')->with('count',$count);
	}
}
