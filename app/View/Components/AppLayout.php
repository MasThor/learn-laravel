<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;
    public $styles = null;
    public $scripts = null;
    public function __construct($title = null)
    {
        $this->title = $title ?? "Learn Laravel";
    }

public function render()
    {
        return view('layouts.app');
    }
}
