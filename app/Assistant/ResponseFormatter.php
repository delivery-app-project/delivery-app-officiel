<?php

namespace App\Assistant;


class ResponseFormatter
{

    public const  VALIDATION_KEY_ERROR = 500;


    public static function response($data,$error = false)
    {
        
        if(!$error)
        return response()->json($data);

        return response()->json([
            'error' => $error,
            'messages' => $data,
            'keys' => array_keys($data)
        ]);
    }
}
