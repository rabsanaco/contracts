<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Link extends Component
{
    protected $content;
    protected $href;
    protected $btnType = null;

    /**
     * Link constructor.
     * @param $content
     * @param $href
     */
    public function __construct($content, $href, $btnType=null)
    {
        $this->content = $content;
        $this->href = $href;
        $this->btnType = $btnType;
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

    /**
     * @return mixed
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href): void
    {
        $this->href = $href;
    }

    /**
     * @return null
     */
    public function getBtnType()
    {
        return $this->btnType;
    }

    /**
     * @param null $btnType
     */
    public function setBtnType($btnType): void
    {
        $this->btnType = $btnType;
    }


}
