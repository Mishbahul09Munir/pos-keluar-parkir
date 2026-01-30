<?php

namespace App\Livewire\PosKeluar;

use Livewire\Component;

class Dashboard extends Component
{
    public $plat;
    public $nomorTiket;
    public $catatan;

    public function submit()
    {
        // simulasi transaksi
        session()->flash('success', 'Transaksi berhasil, gate dibuka');
        $this->reset(['plat','nomorTiket','catatan']);
    }

    public function render()
    {
        return view('livewire.pos-keluar.dashboard');
    }
}

