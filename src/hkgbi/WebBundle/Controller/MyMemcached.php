<?php
/**
 * Created by PhpStorm.
 * User: kcswag
 * Date: 2/1/16
 * Time: 10:14 AM
 */

namespace hkgbi\WebBundle\Controller;

use Doctrine\Common\Cache\MemcachedCache;
use Memcached;


class MyMemcached extends MemcachedCache
{
    public function __construct()
    {
        $mem = new Memcached();
        $mem->addServer("127.0.0.1",11211);
        $this->setMemcached($mem);
        return $mem;
    }

    public function setMemcached(Memcached $memcached)
    {
        parent::setMemcached($memcached);
    }

    public function doFetch($id)
    {
        return parent::doFetch($id);
    }

    public function doSave($id, $data, $lifeTime = 0)
    {
        return parent::doSave($id, $data, $lifeTime);
    }

    public function doDelete($id)
    {
        return parent::doDelete($id);
    }

    public function doGetStats()
    {
        return parent::doGetStats();
    }

    public function doFetchMultiple(array $keys)
    {
        return parent::doFetchMultiple($keys);
    }

    public function doFlush()
    {
        return parent::doFlush();
    }


}