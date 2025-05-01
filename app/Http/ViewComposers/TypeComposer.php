<?php

namespace App\Http\ViewComposers;

use App\Models\Types;
use Illuminate\View\View;

class TypeComposer
{
    public function compose(View $view)
    {
        $type = Types::all();
        $view->with('type', $type);
    }
}

?>