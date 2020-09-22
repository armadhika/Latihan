<?php

namespace App\Http\Livewire;

use App\Kontak;
use Livewire\Component;
use Livewire\WithPagination;

class KontakIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    public $newdata;
    public $paginate = 5;
    public $showAdd = "hide";
    public $Batal = "add";

    protected $listeners = ['conIndex','kontakUpdate','showAdd'];

    // public function mount()
    // {
    //     $this->data = Kontak::all();
    // }
    
    public function showAdd()
    {
        $this->showAdd = "add";
    }

    public function Batal()
    {
        $this->showAdd = "hide";
    }

    public function conIndex($kontak)
    {
        session()->flash('Pesan','Data  Terimpan');
    }

    public function kontakUpdate()
    {
        session()->flash('Update','Data Diubah');
    }
    
    public function render()
    {
        if($this->search == null){
            $data = Kontak::orderBy('id','desc')->paginate($this->paginate);
        }else{
            $data = Kontak::where('name','like','%'.$this->search.'%')->orderBy('id','desc')->paginate($this->paginate);
        }
        return view('livewire.kontak-index',compact('data'));
    }

    public function getKontak($id)
    {
        $this->showAdd = "edit";
        $kontak = Kontak::find($id);
        $this->emit('getKontak',$kontak);
    }

    public function hapus($id)
    {
        $kontak = Kontak::find($id);
        $kontak->delete();
        session()->flash('Hapus data','Data dihapus');
    }
}
