<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputTextarea extends Component
{
    public bool $isInvalid = false;
    public function __construct(
        public string $name,
        public string $label,
        public string $id,
        public string | null $value = '',
        public array $errors = [],
    )
    {
        $this->isInvalid = !empty($this->errors);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-textarea');
    }
}
