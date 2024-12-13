<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{

    public function mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
     return <<<'HTML'
    <div>
        <p>Loading info </p>
    </div>
    HTML;
    }
    public function render()
    {
        return view('livewire.lazy');
    }
}
