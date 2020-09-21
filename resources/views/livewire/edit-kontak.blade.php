<div>
<form wire:submit.prevent="update">
<div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="name">Nama</label>
      <input  type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Nama" >
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
      <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model="phone" placeholder="Phone" >
        @error('phone')
            <span class="invalid-feedback">
            Isikan No Phone
            </span>
        @enderror
    </div>
  </div>
<button class="btn btn-primary">Simpan</button>
<form>
<hr>
</div>
