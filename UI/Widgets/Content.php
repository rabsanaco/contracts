<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Content extends Container
{
    protected $breadcrumb;

    /**
     * @return bool
     */
    public function hasBreadcrumb(): bool
    {
        return !empty($this->breadcrumb);
    }

    /**
     * @param bool $breadcrumb
     */
    public function setBreadcrumb($breadcrumb): void
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * @param bool $breadcrumb
     */
    public function getBreadcrumb($breadcrumb)
    {
        return $this->breadcrumb;
    }
}
