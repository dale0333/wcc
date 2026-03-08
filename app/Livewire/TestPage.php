<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Test Page')]
class TestPage extends Component
{
    public $title= '';
    public $content = '';

    public function createPost()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
        ]);

        Post::create($validated);

        $this->reset(['title', 'content']);

        session()->flash('message', 'Post created successfully.');
    }

    public function render()
    {
        return view('livewire.test-page', [
            'posts' => Post::latest()->get(),
        ]);
    }
}
