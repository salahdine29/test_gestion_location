<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingUpdateRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('dashbord.settings.index');
    }


    public function update(SettingUpdateRequest $request,$id){

        if($request->has('logo')){
            $LogoName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path("assets/img/brand"),$LogoName); 
            Setting::Where('id',$id)->update(['logo'=>asset('assets')."/img/brand/".$LogoName]);
        }


        Setting::where('id',$id)
        ->update([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'description'=>$request->input('description'),
        ]);

        return redirect()->route('dashbord.index');

    }
}
