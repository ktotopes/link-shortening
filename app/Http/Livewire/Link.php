<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class Link extends Component
{
    public string $link = '';
    public string $token = '';

    protected array $rules = [
        'link' => 'required|string|url',
    ];

    public function saveLink()
    {
        $this->validate();

        $this->token = Str::random(6);

        $link = new \App\Models\Link([
            'link'  => $this->link,
            'token' => $this->token,
        ]);

        $link->save();
    }

    public function render()
    {
        return view('livewire.link');
    }
}
