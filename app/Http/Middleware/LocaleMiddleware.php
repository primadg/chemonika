<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\AppContoller;


class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public static $mainLanguage = 'ru';

    public static $languages = ['en', 'ru', 'ukr'];


    public static function getLocale()
    {
        $uri = request()->path();

        $segmentsURI = explode('/',$uri);

        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], self::$languages)) {

            if ($segmentsURI[0] != self::$mainLanguage) return $segmentsURI[0];

        }
        return null;
    }

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if($locale) AppContoller::setLocale($locale);

        else AppContoller::setLocale(self::$mainLanguage);

        return $next($request); 
    }
}
