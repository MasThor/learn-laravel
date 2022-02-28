<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    
    public function render()
    {
        $navigation = [
            "Home" => "/",
            "Profile" => "/profile",
            "Blog" => "/blog"
        ];
        return view('layouts.navbar' , compact("navigation"));
    }
}
