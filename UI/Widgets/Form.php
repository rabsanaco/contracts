<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 12:25
 */

namespace Rabsanaco\Contracts\UI\Widgets;


abstract class Form extends Component
{
    protected $action;
    protected $method;
    protected $showErrors = true;

    public function __construct($action)
    {
        $this->action = $action;
    }

    public function getMethod()
    {
        if(is_null($this->method)){
            return 'POST';
        }

        return $this->method;
    }

    public function setMethod($method){
        $this->method = $method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action){
        $this->action = $action;
    }

    /**
     * @return bool
     */
    public function ShowErrors(): bool
    {
        return $this->showErrors;
    }

    /**
     * @param bool $showErrors
     */
    public function setShowErrors(bool $showErrors): void
    {
        $this->showErrors = $showErrors;
    }


}
