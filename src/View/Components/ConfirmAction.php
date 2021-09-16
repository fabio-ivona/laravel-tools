<?php

namespace DefStudio\Tools\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfirmAction extends Component
{
    public function __construct(
        public $title = 'Confirm',
        public $content = 'Do you really want it?',
        public $confirmText = 'Confirm',
        public $abortText = 'No, Abort'
    ) {
    }

    public function render(): Factory|View|Application
    {
        return view("tools::confirm-action");
    }
}
