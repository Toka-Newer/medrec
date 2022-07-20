<?php

namespace App\Traits;

trait GeneralTraits
{
    public function getCurrentLang(){
        return app()->getLocale();
    }

    public function returnError($errNum,$msg){
        return response()->json([
            'status'=> false,
            'errNum'=> $errNum,
            'msg'=> $msg
        ]);
    }

    public function returnSuccessMessage($msg = "",$errNum = "S000"){
        return response()->json([
            'status'=> true,
            'errNum'=> $errNum,
            'msg'=> $msg
        ]);
    }

    public function returnData($key, $value, $msg = "sucess")
    {
        return response()->json([
            'status'=> true,
            'errNum'=> "S000",
            'errMsg'=> $msg,
            $key=> $value
        ]);
    }

    // public function returnValidationError($code = 'E001', $validator){

    // }

    public function saveImage($photo, $folder){
        $photo->store('/',$folder);
        $filename = $photo->hashName();
        // $path = 'images/' . $folder . '/' . $filename;
        return $filename;
    }
}
