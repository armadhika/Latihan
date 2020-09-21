<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Kontak;

class EditKontak extends Component
{

    public $name;
    public $phone;
    public $idKontak;
    public $showupdate;

    protected $listeners = ['getKontak'];

    public function render()
    {
        return view('livewire.edit-kontak');
    }

    public function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }

    public function getKontak($kontak)
    {
        $this->name = $kontak['name'];
        $this->phone = $kontak['phone'];
        $this->idKontak = $kontak['id'];
    }

    public function update()
    {
         $this->validate([
            'name' => 'required|min:5', 
            'phone' => 'required|numeric'
        ]);

        if($this->idKontak){
            $kontak = Kontak::find($this->idKontak);
            $kontak->update([
                'name' => $this->name,
                'phone' => $this->phone
            ]);
        }
        $this->showupdate = false;

        $this->resetinput();
        $this->emit('kontakUpdate');
    }
}
