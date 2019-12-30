<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:22
 */

namespace Rabsanaco\Contracts\UI;


use Rabsanaco\Contracts\UI\Widgets\Graphic;

interface Kit
{
    public function createHeader();

    public function createContent();

    public function createPage();

    public function createCustomPage($wholePage);

    public function createFooter();

    public function createNavigation();

    public function createButton($text, $type = 'primary');

    public function createInput($name, $label = '', $placeholder = '');
    public function createRadio($name, $label = '');
    public function createCheckbox($name, $label = '');
    public function createTextarea($name, $label = '', $title = '');

    public function createLink($content, $href, $btnType=null);

    public function createAlert($content, $type);

    public function createSelect($name, $label, $placeholder, $options = []);
    public function createFile($name, $label);

    public function createTable($data, $head = [], $pagination = null);

    public function createForm($action);

    public function createCard();

    public function createBr();
    public function createOption($title, $href, $icon, $type = 'primary');

    public function createGraphic();

    public function createTableRow();

    public function createPagination($paginator);

    public function createTableData();

    public function createText($content);

    public function createBreadcrumb();

    public function createBadge($content, $type);

    public function createNavigationItem($title, $link, $icon);

    public function createCkEditor(Graphic $graphic);

    public function createImage($path);

    public function createInlineNavigation();
    public function createInlineNavigationItem($title, $link, $icon);

    public function createRow();
    public function createColumn($size = null);

    public function createCounter($text, $icon, $count, $percent, $desc);

    public function createHeading($size);
    public function createDivider();
    public function createParagraph();
    public function createDivision();
    public function createOrderForm($action);

    public function createCaptcha();
}
