<?php


namespace Rabsanaco\Contracts\UI\Builders;


use Rabsanaco\Contracts\UI\Builder;
use Rabsanaco\Contracts\UI\Kit;
use Rabsanaco\Contracts\UI\Widgets\Graphic;
use Rabsanaco\UIManager\Events\CreatingNavigation;

abstract class AbstractBuilder implements Builder
{
    protected $factory;

    protected $product;

    public function __construct(Kit $factory)
    {
        $this->factory = $factory;

        $this->product = $this->factory()->createPage();

        $this->product->setTitle(setting('general.title', env('APP_NAME')), true);

        $this->product->setDescription(setting('general.description'));

        $this->product->setFavicon(env('APP_URL').'/storage/'.setting('general.favicon'));
    }

    public function factory()
    {
        return $this->factory;
    }

    public function build()
    {
        return $this->product->draw();
    }

    public function setTitle($title, $relative = true){
        if($relative){
            $title .= ' | ' . $this->product->getTitle();
        }

        $this->product->setTitle($title);
    }

    public function createPage()
    {
        if(! is_null($this->product)){
            return $this;
        }

        $this->product = $this->factory->createPage();

        return $this;
    }

    public function createCustomPage(){

    }

    public function setPage($page){
        $this->product = $page;

        $this->product->setTitle(setting('general.title', env('APP_NAME')), false);

        $this->product->setDescription(setting('general.description'));

        $this->product->setFavicon(env('APP_URL').'/storage/'.setting('general.favicon'));

    }

    public function getPage()
    {
        if(is_null($this->product)){
            $this->createPage();
        }

        return $this->product;
    }

    public function createHeader()
    {


        if($this->product->hasHeader()){
            return $this;
        }

        $header = $this->factory->createHeader();

        $this->product->setHeader($header);

        return $this;
    }

    public function getHeader()
    {
        // TODO: Implement getHeader() method.
    }

    public function createFooter()
    {
        if($this->product->hasFooter()){
            return $this;
        }

        $footer = $this->factory->createFooter();

        $this->product->setFooter($footer);

        return $this;
    }

    public function getFooter()
    {
        // TODO: Implement getFooter() method.
    }

    public function createNavigation()
    {

        if($this->product->hasNavigation()){
            return $this;
        }

        $navigation = $this->factory->createNavigation();

        $this->product->setNavigation($navigation);

        event(new CreatingNavigation($navigation));

        return $this;


    }

    public function getNavigation()
    {
        // TODO: Implement getSidebar() method.
    }

    public function createContent()
    {
        if($this->product->hasContent()){
            return $this;
        }


        $content = $this->factory->createContent();

        $this->product->setContent($content);

        return $this;
    }

    public function addToContent(Graphic $graphic)
    {
        if($this->product->hasContent()){
            $this->product->getContent()->addGraphic($graphic);
        }

    }

    public function getContent()
    {
        return $this->product->getContent();
    }

    public function addValidator($validator){
        if(!is_null($validator)){
            $this->product->addValidator($validator);
        }

    }
}
