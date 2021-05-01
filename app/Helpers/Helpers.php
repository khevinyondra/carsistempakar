<?php

namespace App\Helpers;

class Helpers 
{
    public static function response($status_code, $success, $message, $data=null) {
        $attribute = [
            'success' => $success,
            'message' => $message
        ];
        if ($data) {
            $attribute['data'] = $data;
        }
        return response()->json($attribute, $status_code);
    }
}