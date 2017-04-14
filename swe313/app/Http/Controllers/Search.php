<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\Package;
use App\UserActivity;
use Redirect;
use DB;
use File;
use Image;

class Search extends Controller
{
     public function ProcessSearch(Request $request) {
            $data= $request->input('name');
			if (strstr($data,"<") OR strstr($data,">") OR strstr($data,"(") OR strstr($data,")") OR
			strstr($data,".") OR
			strstr($data,"%") OR
			strstr($data,"/") OR
			strstr($data,",") OR
			strstr($data,"*") OR
			strstr($data,"+") OR
			strstr($data,"script") OR
			strstr($data,"alert") OR
			strstr($data,"img") OR
			strstr($data,"document") OR
			strstr($data,"domain") OR
			strstr($data,"onload") OR
			strstr($data,"prompt") OR
			strstr($data,"&amp") OR
			strstr($data,"&lt") OR
			strstr($data,"&gt") OR
			strstr($data,"&quot") OR
			strstr($data,"&#x27") OR
			strstr($data,"&#x2F") OR
			strstr($data,"(") OR
			strstr($data,")") OR
			strstr($data,"&#34") OR
			strstr($data,"&#35") OR
			strstr($data,"&#38") OR
			strstr($data,"&#39") OR
			strstr($data,"&#40") OR
			strstr($data,"&#41") OR
			strstr($data,"&#47") OR
			strstr($data,"&#59") OR
			strstr($data,"&#60") OR
			strstr($data,"&#62") OR
			strstr($data,"svg") OR
			strstr($data,"!") OR
            strstr($data,"'") OR
			strstr($data,"@")) {
			$secure = htmlentities($data);
            $ipaddress = getenv("REMOTE_ADDR"); 
            $browser=$_SERVER['HTTP_USER_AGENT'];
			//$credentials=$this->StoreAttack($data,$ipaddress,$browser);


			UserActivity::create([
	           'ip' => $ipaddress,
	           'malicious_payload' => $secure,
	           'browser' => $browser



	     ]);
			$tests = Package::paginate(50);
			return view('search.attack', compact('tests'));
			
			

			}
			else
			{
			//$location = Location::paginate(25);
			$tests = Package::paginate(50);
			return view('search.index', compact('tests'));
			}

    } 

    	
		protected function StoreAttack(Request $credentials)
		    {
		       
		       UserActivity::create(Request::all());
		    }
}
