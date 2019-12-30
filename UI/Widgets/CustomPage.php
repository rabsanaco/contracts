<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class CustomPage extends Page
{

    protected $content;

    /**
     * CustomPage constructor.
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
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

    public function setHeader(Header $header)
    {
        // TODO: Implement setHeader() method.
    }

    public function hasHeader()
    {
        // TODO: Implement hasHeader() method.
    }

    public function getHeader()
    {
        // TODO: Implement getHeader() method.
    }

    public function hasContent()
    {
        // TODO: Implement hasContent() method.
    }

    public function setFooter(Footer $footer)
    {
        // TODO: Implement setFooter() method.
    }

    public function hasFooter()
    {
        // TODO: Implement hasFooter() method.
    }

    public function getFooter()
    {
        // TODO: Implement getFooter() method.
    }

    public function setNavigation(Navigation $navigation)
    {
        // TODO: Implement setNavigation() method.
    }

    public function hasNavigation()
    {
        // TODO: Implement hasNavigation() method.
    }

    public function getNavigation()
    {
        // TODO: Implement getNavigation() method.
    }


}
