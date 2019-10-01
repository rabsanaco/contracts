<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:22
 */

namespace Rabsanaco\Contracts\UI;


interface Kit
{
    public function createHeader();

    public function createContent();

    public function createPage();

    public function createFooter();

    public function createSidebar();

    public function createButton();

    public function createLink();

    public function createAlert();

    public function createTable();

    public function createForm();
}
