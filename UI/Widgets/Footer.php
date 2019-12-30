<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Footer extends Container
{
    protected $transparent = false;

    /**
     * @return bool
     */
    public function isTransparent(): bool
    {
        return $this->transparent;
    }

    /**
     * @param bool $transparent
     */
    public function setTransparent(bool $transparent): void
    {
        $this->transparent = $transparent;
    }



}
