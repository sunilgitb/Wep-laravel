<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Mailsetting;
use Illuminate\Support\Facades\Validator;

use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (\Schema::hasTable('mailsettings')) {
            $mailsetting = Mailsetting::first();
            if($mailsetting){
                $data = [
                    'driver'            => $mailsetting->mail_transport,
                    'host'              => $mailsetting->mail_host,
                    'port'              => $mailsetting->mail_port,
                    'encryption'        => $mailsetting->mail_encryption,
                    'username'          => $mailsetting->mail_username,
                    'password'          => $mailsetting->mail_password,
                    'from'              => [
                        'address'=>$mailsetting->mail_from,
                        'name'   => 'LaravelStarter'
                    ]
                ];
                Config::set('mail',$data);
            }
        }

        // Image upload validation
        Validator::extend('max_mb', function ($attribute, $value, $parameters, $validator) {
            $maxSizeInMB = $parameters[0]; // Maximum file size in MB
    
            // Check if the file size is less than or equal to the maximum size in bytes
            return filesize($value) <= $maxSizeInMB * 1024 * 1024;
        });
    
        Validator::extend('image_dimensions', function ($attribute, $value, $parameters, $validator) {
            // Check if the uploaded file is an image
            if (in_array(strtolower($value->getClientOriginalExtension()), ['jpeg', 'jpg', 'png'])) {
                $maxWidth = $parameters[0]; // Maximum width in pixels
                $maxHeight = $parameters[1]; // Maximum height in pixels
    
                list($width, $height) = getimagesize($value);
    
                // Check if the image dimensions are within the allowed limits
                return $width <= $maxWidth && $height <= $maxHeight;
            }
    
            // If the file is not an image, consider it valid
            return true;
        });
    }
}
