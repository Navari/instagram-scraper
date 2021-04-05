<?php

namespace Navari\InstagramScrapper;

use GuzzleHttp\Client;
use Navari\InstagramScrapper\Http\Request;
use Navari\InstagramScrapper\Models\Account;
use Psr\Http\Client\ClientInterface;

class Instagram
{
    const HTTP_NOT_FOUND = 404;
    const HTTP_OK = 200;
    const HTTP_FORBIDDEN = 403;
    const HTTP_BAD_REQUEST = 400;
    const X_IG_APP_ID = '936619743392459';
    private $userAgent = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36';

    /**
     * Instagram constructor.
     *
     */
    public function __construct()
    {
        Request::setHttpClient(new Client());
    }
    /**
     * @return string
     */
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }

    /**
     * @param $session
     * @param $gisToken
     *
     * @return array
     */
    private function generateHeaders( ): array
    {
        $headers = [
            'cookie' => '$cookies',
            'referer' => 'https://www.instagram.com' . '/',
            'x-csrftoken' => '',
            'x-requested-with' => 'XMLHttpRequest',

        ];
        if ($this->getUserAgent()) {
            $headers['user-agent'] = $this->getUserAgent();
        }
        if (empty($headers['x-csrftoken'])) {
            $headers['x-csrftoken'] = md5(uniqid()); // this can be whatever, insta doesn't like an empty value
        }
        return $headers;
    }

    public function getAccount($username)
    {
        $url = "https://www.instagram.com/{$username}/channel/?__a=1&page=3";
        $response = Request::get($url, $this->generateHeaders());
        $body = $response->body;

        return Account::create($body['graphql']['user']);
    }


}