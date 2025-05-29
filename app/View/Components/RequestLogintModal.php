<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RequestLogintModal extends Component
{
    public function __construct()
    {
    }

    public function render()
    {
        return view('components.request-logint-modal');
    }
}