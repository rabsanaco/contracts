<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-05
 * Time: 09:21
 */

namespace Rabsanaco\Contracts\UI\Directors;


use Rabsanaco\Contracts\UI\Director;

abstract class AbstractDirector implements Director
{
    protected $formRequest;

    /**
     * @return mixed
     */
    public function getTargetFormRequest()
    {
        return $this->formRequest;
    }

    public function title(){
        return env('APP_NAME');
    }

    public function setTargetFormRequest($request){
        $this->formRequest = $request;
    }

    public function subscribe($events)
    {
        // TODO: Implement subscribe() method.
    }
}
