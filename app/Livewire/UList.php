<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;

class UList extends Component
{
    public function render()
    {
        return view('livewire.u-list',[
            'urls' => Url::orderBy('created_at','desc')->where('user_id',auth()->id())
                                                       ->paginate(20)
        ]);
    }

    public function delete($id)
    {
        $url = Url::findOrFail($id);
        $url->delete();
    }

    public function update($id)
    {
        $url = Url::findOrFail($id);
        $url->active = !$url->active;
        $url->save();

        return redirect()->back();
    }
}
