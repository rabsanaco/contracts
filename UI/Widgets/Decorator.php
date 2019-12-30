<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Decorator extends Component
{
    protected $component;

    /**
     * Decorator constructor.
     * @param $component
     */
    public function __construct(Graphic $component)
    {
        $this->component = $component;
    }

    /**
     * @return Graphic
     */
    public function getComponent(): Graphic
    {
        return $this->component;
    }

    /**
     * @param Graphic $component
     */
    public function setComponent(Graphic $component): void
    {
        $this->component = $component;
    }




}
