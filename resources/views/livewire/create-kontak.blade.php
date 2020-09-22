<div>
<form wire:submit.prevent="save">
<div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="name">Nama</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Nama" >
    @if(empty($name))
        @error('name')
            <span class="invalid-feedback">
            Isikan nama
            </span>
        @enderror
        @else
        @error('name')
            <span class="invalid-feedback">
            Isikan nama dengan benar | min 5 karakter
            </span>
        @enderror
    @endif
    </div>
    <div class="col-md-3 mb-3">
      <label for="phone">Phone</label>
      <input class="form-control @error('phone') is-invalid @enderror" wire:model="phone" placeholder="Phone" >
        @error('phone')
            <span class="invalid-feedback">
            Isikan No Phone
            </span>
        @enderror
    </div>
    <div class="col-md-3 mb-3">
    <label for="">Pilih</label>
    <select class="form-control" wire:model="pilih" wire:click="tampil_row">
      <option value="">Pilih</option>
        <option value="A">A</option>
        <option value="D">D</option>
    </select>
    </div>
    @if($tampil_row)
    <div class="col-md-3 mb-3">
      <label for="">Kolom Baru</label>
      <input type="text" class="form-control">
    </div>
    @endif

  </div>
<button class="btn btn-primary">Simpan</button>
<form>
<hr>
</div>
