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

    public function createHeader();

    public function createFooter();

    public function createNavigation();

    public function createContent();

    public function addToContent(Graphic $graphic);

    public function getPage();

    public function getHeader();

    public function getFooter();

    public function getNavigation();

    public function getContent();

}
