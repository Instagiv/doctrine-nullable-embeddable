<?php

namespace Tarifhaus\Doctrine\ORM;

interface NullableEmbeddableInterface
{
    /**
     * @return bool
     */
    public function isNull();
}
