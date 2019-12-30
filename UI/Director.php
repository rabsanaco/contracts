<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-05
 * Time: 08:00
 */

namespace Rabsanaco\Contracts\UI;


use Illuminate\Http\Request;

interface Director
{
    public function construct(Request $request);

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events);
}
