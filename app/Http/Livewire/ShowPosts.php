<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public $cek = false;

    public function render()
   {
       return view('livewire.show-posts');
   }
    public function cek_combo()
    {
        dd($this->cek);
    }

}
