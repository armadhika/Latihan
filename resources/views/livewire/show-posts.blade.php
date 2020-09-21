<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     @livewireStyles
</head>
<body>
    <lebel>Pilih</lebel> 
    <select wire:model="cek" wire:click="cek_combo">
        <option value=""></option>
        <option value="Motor">Motor</option>
        <option value="Mobil">Mobil</option>
        <option value="Sepeda">Sepeda</option>
    </select>
    @livewireScripts
</body>
</html>