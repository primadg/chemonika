<?php

namespace App\Http\Middleware;

use App\Http\Controllers\admin\ProductController;
use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\AppContoller;


class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public static $mainLanguage = 'ru';

    public static $languages = ['en', 'ru', 'ukr'];


    public static function getLocale()
    {
        $uri = request()->path();


        $segmentsURI = explode('/', $uri);
        $segmentsURI = end($segmentsURI);


        if (!empty($segmentsURI) && in_array($segmentsURI, self::$languages)) {

            if ($segmentsURI != self::$mainLanguage) return $segmentsURI;

        }

        return null;
    }

    public function handle($request, Closure $next)
    {
        $locale = self::getLocale();

        if ($locale) {
            AppContoller::setLocale($locale);
            ProductController::setLocale($locale);
        } else {
            AppContoller::setLocale(self::$mainLanguage);
            ProductController::setLocale(self::$mainLanguage);
        }


        return $next($request);
    }
}
