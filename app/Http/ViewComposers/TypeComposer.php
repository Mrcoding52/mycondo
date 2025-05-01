<?php

namespace App\Http\ViewComposers;

use App\Models\Types;
use Illuminate\View\View;

class TypeComposer
{
    public function compose(View $view)
    {
        $type = Typespaginate(10);        $view->with('type', $type);
    }
}

?>