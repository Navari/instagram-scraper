<?php


namespace Navari\InstagramScrapper;


class Endpoints
{
    const INSTAGRAM_CDN_URL = 'https://scontent.cdninstagram.com/';
    const MEDIA_LINK = 'https://www.instagram.com/p/{code}';

    public static function getMediaPageLink($code)
    {
        return str_replace('{code}', urlencode($code), static::MEDIA_LINK);
    }

}