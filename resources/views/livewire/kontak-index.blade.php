<div>
  @if($showupdate)
    @livewire('edit-kontak')
  @else
    @livewire('create-kontak')
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
<!-- <button wire:click="add" class="btn btn-success" >Tambah</button> -->
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
    <input type="text" class="form-control form-control-sm" placeholder="pencarian" wire:model="search">
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
  @php 
  $no = 1;
  @endphp
  @foreach($data as $d)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$d->name}}</td>
      <td>{{$d->phone}}</td>
      <td>
        <button wire:click="getKontak({{ $d->id }})"> Edit </button>
        <button wire:click="hapus({{ $d->id }})"> Hapus </button>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $data->links() }}
</div>
