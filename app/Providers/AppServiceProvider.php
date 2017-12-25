<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Validator::extend('sql_check', function($attribute, $value, $parameters, $validator) {

            $valid = true;
            if ($value != ""){
                $stringnya = str_split($value);
                $SUM = "SUM(";
                $AS = " AS ";

                for($i = 0;$i<count($stringnya)-3;$i++){
                    $sum = "";
                    if($i+3 <= count($stringnya)){
                    $sum = $stringnya[$i].$stringnya[$i+1].$stringnya[$i+2].$stringnya[$i+3];
                    }
                    
                    if($stringnya[$i] =="s" || $stringnya[$i] =="S" && 
                    $stringnya[$i+1] =="u" || $stringnya[$i+1] =="U" &&
                    $stringnya[$i+2] =="m" || $stringnya[$i+2] =="M" &&
                    $stringnya[$i+3]=="(" && $SUM != $sum){
                        $valid = false;
                        break;
                    }
                    if($stringnya[$i] ==" " && 
                    $stringnya[$i+1] =="a" || $stringnya[$i+1] =="A" && 
                    $stringnya[$i+2] =="s" || $stringnya[$i+2]=="S" &&
                    $stringnya[$i+3] == " " && $AS != $sum){
                        $valid = false;
                        break;
                    }
                }
            }
            return $valid;

        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
