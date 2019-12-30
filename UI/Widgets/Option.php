<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Option extends Component
{
    protected $title;
    protected $href;
    protected $icon;
    protected $type = 'primary';
    protected $button = false;
    protected $confirmation = false;

    /**
     * Option constructor.
     * @param $title
     * @param $href
     * @param $icon
     * @param $type
     */
    public function __construct($title, $href, $icon, $type = 'primary')
    {
        $this->title = $title;
        $this->href = $href;
        $this->icon = $icon;
        $this->type = $type;
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
     * @return mixed
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param mixed $icon
     */
    public function setIcon($icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isButton(): bool
    {
        return $this->button;
    }

    /**
     * @param bool $button
     */
    public function setButton(bool $button): void
    {
        $this->button = $button;
    }

    /**
     * @return bool
     */
    public function needsConfirmation(): bool
    {
        return $this->confirmation;
    }

    /**
     * @param bool $confirmation
     */
    public function setConfirmation(bool $confirmation): void
    {
        $this->confirmation = $confirmation;
    }







}
