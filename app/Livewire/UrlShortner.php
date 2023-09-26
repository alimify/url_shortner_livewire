<?php

namespace App\Livewire;

use App\Actions\UrlShortner\UniqueString;
use App\Models\Url;
use Livewire\Component;

class UrlShortner extends Component
{

    public $original_url;
    public $short_link = null;

    public $user_id;

    public function save()
    {
        $this->short_link = (new UniqueString())->generate();
        $this->user_id = auth()->id();

        $url = Url::create(
            $this->only(['original_url','short_link','user_id'])
        );
        return $this->redirect("/view/{$this->short_link}");
    }

    public function render()
    {
        return view('livewire.url-shortner');
    }
}
