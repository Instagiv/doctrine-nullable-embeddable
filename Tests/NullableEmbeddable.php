<?php

namespace Tarifhaus\Tests\Doctrine\ORM;

use Tarifhaus\Doctrine\ORM\NullableEmbeddableInterface;

final class NullableEmbeddable implements NullableEmbeddableInterface
{
    private $isNull;

    /**
     * NullableEmbeddable constructor.
     *
     * @param bool $isNull
     */
    public function __construct($isNull)
    {
        $this->isNull = $isNull;
    }

    /**
     * @return bool
     */
    public function isNull()
    {
        return $this->isNull;
    }
}
