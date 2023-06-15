<?php
namespace App\Helpers;

class APIFormatter {
    protected static $responSuccess = [
        'code' => null,
        'status' => null,
        'data' => null
    ];
    protected static $responFailed = [
        'code' => null,
        'status' => null,
    ];

    public static function success($code = null, $status = null, $data = null) {
        self::$responSuccess['code'] = $code;
        self::$responSuccess['status'] = $status;
        self::$responSuccess['data'] = $data;
        return response()->json(self::$responSuccess, self::$responSuccess['code']);
    }
    public static function failed($code = null, $status = null)
    {
        self::$responFailed['code'] = $code;
        self::$responFailed['status'] = $status;
        return response()->json(self::$responFailed, self::$responFailed['code']);
    }
}


?>
