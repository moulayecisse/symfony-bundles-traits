<?php


namespace Cisse\Bundle\TraitsBundle\Utility;

class ApplicationUtility
{
    public static function locale(?string $locale = null): string
    {
        if ($locale !== null) {
            return $locale;
        }

        if (isset($_SERVER['REQUEST_URI']) && str_contains($_SERVER['REQUEST_URI'], '/en/')) {
            return 'en';
        } else {
            return 'fr';
        }
    }
}
