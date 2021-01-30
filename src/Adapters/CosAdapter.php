<?php

namespace Anam\PhantomMagick\Adapters;

use Freyo\Flysystem\QcloudCOSv5\Adapter;
use Qcloud\Cos\Client;

class CosAdapter extends BaseAdapter
{
    const DRIVER = 'cosv5';

    public function pick()
    {
        $config = config('filesystems.disks.' . self::DRIVER);

        $client = new Client($config);

        return new Adapter($client, $config);
    }
}