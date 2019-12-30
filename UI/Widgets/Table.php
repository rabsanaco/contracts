<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Table extends Component
{
    protected $data;
    protected $head = [];
    protected $pagination;
    protected $title;

    /**
     * Table constructor.
     * @param array $data
     * @param array $head
     */
    public function __construct($data, array $head, $pagination = null)
    {
        $this->data = $data;
        $this->head = $head;
        $this->pagination = $pagination;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getHead(): array
    {
        return $this->head;
    }

    /**
     * @param array $head
     */
    public function setHead(array $head): void
    {
        $this->head = $head;
    }

    /**
     * @return null
     */
    public function getPagination()
    {
        return $this->pagination;
    }

    /**
     * @param null $pagination
     */
    public function setPagination($pagination): void
    {
        $this->pagination = $pagination;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }




}
