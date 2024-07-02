<?php

namespace App\Livewire\Tables;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class BasicTable extends Component
{
    #[Title('Create Post')]
    public function render()
    {
        $posts = Post::on('cluster')
            ->select('id', 'title', 'description', 'date', 'status')
            ->limit(5)
            ->get();

        return view('livewire.tables.basic-table', ['posts' => $posts]);
    }
}
