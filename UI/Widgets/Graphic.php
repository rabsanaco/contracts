<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Graphic
{

    /**
     * @param Graphic $widget
     * @return mixed
     */
    public abstract function add(Graphic $widget);

    public abstract function remove(Graphic $widget);

    public abstract function draw();
}
