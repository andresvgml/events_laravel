<?php

namespace App\Listeners;

use App\Events\FormEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param  FormEvent  $event
     * @return void
     */
    public function handle(FormEvent $event)
    {
        sleep(15);
        /*$a = 0;
        do {
            \Log::info(date('Y-m-d H:i:s') . ' En espara : ' . $a);
            ++$a;
        } while ($a <= 100000);*/
        \Log::info(date('Y-m-d H:i:s') . " - Finalizado: " . $event->form->name);
    }
}
