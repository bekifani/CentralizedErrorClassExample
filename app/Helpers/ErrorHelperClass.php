<?php
namespace App\Helpers;
class ErrorHelperClass {
    public static $RESPONSES = [
        "required" => "Please set the :attribute please please",
        "email" => "The :attribute field must be a valid email"
    ];
    PUBLIC static $INVALID_CREDENTIALS="No Active Account with this username and password exists";
}
