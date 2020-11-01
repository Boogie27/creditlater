<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Models\Web\Rating;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // money blade function
        Blade::directive('money', function ($amount) {
            $naira = "&#x20A6;";
            return "<?php echo '$naira'.number_format($amount); ?>";
        });

         // percenatge blade function
        Blade::directive('percentage', function($array){
            $productPrice = explode(',', str_replace(["[", "]"], '', $array));
            $output = "<?php echo ceil(";
            $output .= "$productPrice[0] / ";
            $output .= "($productPrice[0] + $productPrice[1])";
            $output .= " * 100";
            $output .= ")?>";
            $output .= "% off";
            

            return $output;
        });


        
    }
}
