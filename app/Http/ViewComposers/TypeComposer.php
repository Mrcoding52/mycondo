<?php

namespace App\Http\ViewComposers;

use App\Models\Types;
use Illuminate\View\View;

class TypeComposer
{
    public function compose(View $view)
    {
        $type = Types::paginate(10);        $view->with('type', $type);
    }
}

?>