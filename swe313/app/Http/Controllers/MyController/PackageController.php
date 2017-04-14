<?php

namespace App\Http\Controllers\MyController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator;
//use Intervention\Image\Image as Image;
use App\User;
use App\Package;
use DB;
use File;
use Image;

class PackageController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $user=Auth::user();
        if ($user->type!=1) {
        return "permission denied!!";
        }
    }
    public function packageUpload(Request $request)
    {


      $destinationPath = 'uploads/';
      $file = $request->file('img');
  

      $image_name = time()."-".$file->getClientOriginalName();
      $file->move('uploads', $image_name);
      $save=$this->create($request->all());
      $lastInsertedId= $save->id;

        DB::table('packages')->where('id',$lastInsertedId)
         ->update(['img' => $image_name]);

    return $save;
}

protected function create(array $data)
    {
      return Package::create([
           'name' => $data['name'],
           'price' => $data['price'],
           'des' => $data['des'],
           'cat' => $data['cat'],


     ]);
    }

   public function dlt(Request $request)
    {
      $id = $request->input('id');
      $deletedRows = Package::where('id',$id)->delete();
      return response()->json(['status' => 'sucess']);
    }

}
