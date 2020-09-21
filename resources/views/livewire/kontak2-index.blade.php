<div>
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
  @foreach($data as $d)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{$d->name}}</td>
      <td>{{$d->phone}}</td>
      <td>
        <button> Edit </button>
        <button> Hapus </button>
        <!-- <button wire:click="$emit('kontak2')"> Kontak 2 </button> -->
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
