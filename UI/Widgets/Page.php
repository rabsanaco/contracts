<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


use Illuminate\Support\Facades\App;

abstract class Page extends Graphic
{
    protected $direction;

    protected $lang;

    protected $title;

    protected $description;

    protected $favicon;

    protected $validators = [];

    protected $bodyClasses = '';
    protected $mainClasses = '';

    private static $directions = [
        'fa' => 'rtl',
        'en' => 'ltr',
    ];

    protected $scripts = [];

    protected $styles = [];


    /**
     * @param Header $header
     * @return mixed
     */
    public abstract function setHeader(Header $header);

    /**
     * @return boolean
     */
    public abstract function hasHeader();

    public abstract function getHeader();


    /**
     * @param Content $content
     * @return mixed
     */
    public abstract function setContent(Content $content);

    /**
     * @return boolean
     */
    public abstract function hasContent();

    public abstract function getContent();


    /**
     * @param Footer $footer
     * @return mixed
     */
    public abstract function setFooter(Footer $footer);


    /**
     * @return boolean
     */
    public abstract function hasFooter();

    public abstract function getFooter();


    /**
     * @param Navigation $navigation
     * @return mixed
     */
    public abstract function setNavigation(Navigation $navigation);

    /**
     * @return boolean
     */
    public abstract function hasNavigation();

    public abstract function getNavigation();

    public function getLang(){
        if(is_null($this->lang)){
            return App::getLocale();
        }
        return $this->lang;
    }

    public function setLang($lang){
        $this->lang = $lang;
    }

    public function getDirection(){
        if(is_null($this->direction)){
            return self::$directions[$this->getLang()];
        }

        return $this->direction;

    }

    public function setDirection($direction){
        $this->direction = $direction;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    /**
     * @return array
     */
    public function getValidators(): array
    {
        return $this->validators;
    }

    /**
     * @param array $validators
     */
    public function setValidators(array $validators): void
    {
        $this->validators = $validators;
    }

    public function addValidator($validator){
        $this->validators[] = $validator;
    }

    /**
     * @return array
     */
    public function getScripts(): array
    {
        return $this->scripts;
    }

    /**
     * @param array $scripts
     */
    public function setScripts(array $scripts): void
    {
        $this->scripts = $scripts;
    }

    /**
     * @return array
     */
    public function getStyles(): array
    {
        return $this->styles;
    }

    /**
     * @param array $styles
     */
    public function setStyles(array $styles): void
    {
        $this->styles = $styles;
    }

    public function pushScript($script){
        $this->setScripts(
            array_merge($this->getScripts(), [$script])
        );
    }

    public function pushStyle($style){
        $this->setStyles(
            array_merge($this->getStyles(), [$style])
        );
    }

    /**
     * @return array
     */
    public function getBodyClasses()
    {
        return $this->bodyClasses;
    }

    /**
     * @param array $bodyClasses
     */
    public function setBodyClasses($bodyClasses): void
    {
        $this->bodyClasses = $bodyClasses;
    }

    /**
     * @return string
     */
    public function getMainClasses(): string
    {
        return $this->mainClasses;
    }

    /**
     * @param string $mainClasses
     */
    public function setMainClasses(string $mainClasses): void
    {
        $this->mainClasses = $mainClasses;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    /**
     * @param mixed $favicon
     */
    public function setFavicon($favicon): void
    {
        $this->favicon = $favicon;
    }





}
