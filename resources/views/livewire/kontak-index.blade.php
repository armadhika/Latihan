<div>
  @if($showAdd == "hide")

  @elseif ($showAdd == "add")
    @livewire('create-kontak')
  @elseif ($showAdd == 'edit')
    @livewire('edit-kontak')
  @endif

@if(session()->has('Pesan'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>  {{ session('Pesan') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session()->has('Update'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>  {{ session('Update') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if(session()->has('Hapus data'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>  {{ session('Hapus data') }}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<button wire:click="showAdd" class="btn btn-success" >Tambah</button>
@if($showAdd == "add" || $showAdd == "edit")
  <button wire:click="Batal" class="btn btn-danger">Batal</button>
@endif
    <div wire:loading>
        Processing Payment...
    </div>
<hr>
<div class="row">
  <div class="col">
     <select class="form-control form-control-sm w-auto" wire:model="paginate" >
      <option value="5">5</option>
      <option value="10">10</option>
      <option value="50">50</option>
    </select>
  </div>
  <div class="cal">
    <input type="text" class="form-control form-control-sm" placeholder="Pencarian" wire:model="search">
  </div>
</div>
<br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Telp</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $no => $d)
    <tr>
      <th scope="row">{{ $no+1 }}</th>
      <td>{{$d->name}}</td>
      <td>{{$d->phone}}</td>
      <td>
        <button wire:click="getKontak({{ $d->id }})" class="btn btn-warning"> Edit </button>
        <button wire:click="hapus({{ $d->id }})" onclick="confirm('Hapus Data?')" class="btn btn-danger"> Hapus </button>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $data->links() }}
</div>
