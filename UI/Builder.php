<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:23
 */

namespace Rabsanaco\Contracts\UI;


use Rabsanaco\Contracts\UI\Widgets\Content;
use Rabsanaco\Contracts\UI\Widgets\Footer;
use Rabsanaco\Contracts\UI\Widgets\Graphic;
use Rabsanaco\Contracts\UI\Widgets\Header;
use Rabsanaco\Contracts\UI\Widgets\Page;
use Rabsanaco\Contracts\UI\Widgets\Sidebar;

interface Builder
{

    /**
     * @return Kit
     */
    public function factory();


    /**
     * @return Graphic
     */
    public function build();

    /**
     * @return Page
     */
    public function createPage();


    /**
     * @return Page
     */
    public function getPage();

    public function setPage(Page $page);

    public function createHeader();

    public function getHeader();

    public function setHeader(Header $header);

    public function createFooter();

    public function getFooter();

    public function setFooter(Footer $footer);

    public function createSidebar();

    public function getSidebar();

    public function setSidebar(Sidebar $sidebar);

    public function createContent();

    public function getContent();

    public function setContent(Content $content);
}
