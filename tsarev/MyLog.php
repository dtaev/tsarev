<?php

namespace tsarev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $solution)
        {
            echo $solution;
        }
        $d = new \DateTime();
        $file = "./Log/". $d->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/'))
        {
            mkdir("./Log/");
        }
        file_put_contents($file, $this->log);
    }
    public function _log($str)
    {
        $this->log[] = $str;
    }

    public static function log(string $str): void
    {
        self::Instance()->_log($str);
    }

    public static function write(): void
    {
        LogAbstract::Instance()->_write();
    }
}