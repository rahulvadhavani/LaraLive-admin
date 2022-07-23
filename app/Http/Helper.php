<?php

use App\Models\Setting;
use Illuminate\Support\Facades\File;

if(!function_exists('success')){
    function success($message = "Success",$data= [])
    {
        $res = ['status' => true,  'message' => $message,'type' => 'success', 'code' => 200];
        if(!empty($data)){
            $res = ['status' => true,  'message' => $message,'type' => 'success','data' => $data, 'code' => 200];
        }
        return $res;
    }
}
if(!function_exists('error')){
    function error($message = "Something went wrong!!",$data=[])
    {
        $res = ['status' => false,  'message' => $message,"data"=>$data,'type' => 'error', 'code' => 400];
        return $res;
    }
}
if(!function_exists('authError')){
    function authError($message = "Unauthenticated")
    {
        $res = ['status' => false,  'message' => $message,'type' => 'error', 'code' => 401];
        return $res;
    }
}
if(!function_exists('info')){
    function info($message = "Success")
    {
        $res = ['status' => false,  'message' => $message,'type' => 'info', 'code' => 200];
        return $res;
    }
}

if(!function_exists('imageUploader')){
    function imageUploader($image,$filePath,$isUrl = false)
    {
        $path = public_path($filePath);
        File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
        $imageName = basename($path).'_'.time().'.'.$image->extension();
        $image->move($path, $imageName);
        return $isUrl ? url($filePath,$imageName) : $filePath.$imageName;
    }
}

if(!function_exists('getSettings')){
    function getSettings($key ="")
    {
        $value = "";
        if($key == ""){
            return $value;
        }
        $Settings =  Setting::where('key',$key)->first();
        $value = $Settings->value??null;
        if($key == 'logo_image'){
            $value = $Settings != null ? asset('uploads/'.$Settings->value) : asset('assets/images/logo.png');
        }
        return $value;
    }
}
?>