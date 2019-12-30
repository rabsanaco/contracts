<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Pagination extends Component
{
    protected $paginator;

    /**
     * Pagination constructor.
     * @param $paginator
     */
    public function __construct($paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * @return mixed
     */
    public function getPaginator()
    {
        return $this->paginator;
    }

    /**
     * @param mixed $paginator
     */
    public function setPaginator($paginator): void
    {
        $this->paginator = $paginator;
    }


}
