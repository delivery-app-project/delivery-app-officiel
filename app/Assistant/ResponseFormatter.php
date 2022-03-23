<?php

namespace App\Assistant;


class ResponseFormatter
{





    public static function response($data)
    {
        return response()->json($data);
    }
}
