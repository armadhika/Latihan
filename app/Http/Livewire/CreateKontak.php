<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Kontak;

class CreateKontak extends Component
{

    public $name;
    public $phone;
    public $quantity;
    public $data;
    public $pilih;
    public $kontakid;

    public $tampil_row = false;

    public function mount()
    {
        $this->data = Kontak::all();
    }

    public function tampil_row()
    {
        if($this->pilih == "A"){
            $this->tampil_row = 'true';
        }else{
            $this->tampil_row = false;
        }
    }

    public function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
    public function save()
    {
        $this->validate([
            'name' => 'required|min:5',
            'phone' => 'required|numeric'
        ]);

        $kontak = Kontak::create([
            'name' => $this->name,
            'phone' => $this->phone
        ]);

        $this->resetInput();
        $this->emit('conIndex', $kontak);
    
    }
}
