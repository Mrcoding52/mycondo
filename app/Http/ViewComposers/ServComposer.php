<?php

namespace App\Http\ViewComposers;

use App\Models\services;
use Illuminate\View\View;

class ServComposer
{
    public function compose(View $view)
    {
        $service = services::all();
        $view->with('service', $service);
    }
}

?>
