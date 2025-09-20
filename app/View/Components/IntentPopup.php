<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\Component;

class IntentPopup extends Component
{
    /**
     * Create a new component instance.
     */
    public $show;
    public function __construct()
    {
        $this->show = !Cookie::has('monthly_intent_popup');

        if ($this->show) {
            Cookie::queue('monthly_intent_popup', true, 60 * 24 * 30); // 30 days
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.intent-popup');
    }
}
