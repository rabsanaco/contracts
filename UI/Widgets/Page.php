<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Page extends Graphic
{
    public abstract function addHeader(Header $header);

    public abstract function addContent(Content $content);

    public abstract function addFooter(Footer $footer);

    public abstract function addSidebar(Sidebar $sidebar);
}
