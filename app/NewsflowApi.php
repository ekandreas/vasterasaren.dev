<?php

namespace App;

use Cache;

class NewsflowApi
{

    public function data()
    {
        return Cache::get('Newsflow.posts') ?: $this->update();
    }

    public function update()
    {
        $urlApi = env('NEWSFLOW_API', '');

        if( empty( $urlApi ) ) {
            return [];
        }
        
        $json = file_get_contents($urlApi);
        $response = json_decode($json);
        Cache::forever('Newsflow.posts', $response);

        return $response;
    }

}