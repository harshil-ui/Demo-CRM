<?php

namespace App\Livewire\Tables;

use Livewire\Attributes\Title;
use Livewire\Component;

class BasicTable extends Component
{
    #[Title('Create Post')] 
    public function render()
    {
        return view('livewire.tables.basic-table');
    }
}
