<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Attributes\Layout;
use Livewire\Component;


class ViewLink extends Component
{
    public $url;

    public function mount($code)
    {
        $this->url = Url::where('short_link', $code)->first();
    }

    public function render()
    {
        return view('livewire.view-link')->layout('layouts.guest');
    }
}
