<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Graphic
{
    protected $graphics = [];
    protected $id = null;
    protected $classes = '';

    /**
     * @param Graphic $widget
     * @return mixed
     */
    public function addGraphic(Graphic $widget){
        $this->graphics[] = $widget;
    }

    public function getGraphics(){
        return $this->graphics;
    }

    public function hasClasses(){
        return !empty($this->classes);
    }

    public function remove(Graphic $widget){}

    public function draw(){
        $drawer = $this;

        return view($this->view(), compact('drawer'));
    }

    /**
     * @return null
     */
    public function getId()
    {
        if(is_null($this->id)){
            $this->setId(uniqid());
        }
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function hasId(){
        return !is_null($this->id);
    }

    /**
     * @return string
     */
    public function getClasses(): string
    {
        return $this->classes;
    }

    /**
     * @param string $classes
     */
    public function setClasses(string $classes): void
    {
        $this->classes = $classes;
    }

    public abstract function view();
    //public abstract function drawer();


}
