<?php

namespace App\Http\ViewComposers;

use App\Models\statuts;
use Illuminate\View\View;

class StatusComposer
{
    public function compose(View $view)
    {
        $status = statutspaginate(10);        $view->with('status', $status);
    }
}

?>