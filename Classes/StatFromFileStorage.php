<?php

namespace Classes;

class StatFromFileStorage
{
    /**
     * @var integer
     */
    private $viewsCount;

    /**
     * @var integer
     */
    private $uniqueUrlsCount;

    /**
     * @var integer
     */
    private $totalTraffic;

    /**
     * @var array
     */
    private $crawlers = [
        'Google' => 0,
        'Bing'   => 0,
        'Baidu'  => 0,
        'Yandex' => 0,
    ];

    /**
     * @var array
     */
    private $statusCodes =[];

    public function get($param)
    {
        return $this->$param;
    }

}