<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Alert extends Component
{
    protected $type;
    protected $content;

    /**
     * Alert constructor.
     * @param $type
     * @param $content
     */
    public function __construct($content, $type)
    {
        $this->type = $type;
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }



}
