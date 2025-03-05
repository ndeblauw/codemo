<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormTextarea extends Component
{
    public function __construct(
        public string $name,
        public string $label,
        public ?string $value = null,
    ) { }

    public function render(): View|Closure|string
    {
        return view('components.form-textarea');
    }
}
