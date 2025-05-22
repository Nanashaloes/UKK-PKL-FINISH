<?php

namespace App\Livewire\Guru;

use App\Models\Guru;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function delete($id)
    {
        Guru::findOrFail($id)->delete();
        session()->flash('message', 'Data guru berhasil dihapus.');
    }

    public function render()
    {
        $query = Guru::query();

        // If there's a search term, filter the records
        if (!empty($this->search)) {
            $query->where(function($q) {
                $q->where('nama', 'like', '%' . $this->search . '%')
                ->orWhere('nip', 'like', '%' . $this->search . '%');
            });
        }

        // Urutkan berdasarkan nama
        $query->orderBy('nama', 'asc');

        // Get the results after applying the search filter and ordering
        $guruList = $query->get();

        return view('livewire.guru.index', [
            'guruList' => $guruList, // Pass the result to the view
        ]);
    }

    
    public function ketGender($gender)
    {
        if ($gender === 'L') {
            return 'Laki-laki';
        } elseif ($gender === 'P') {
            return 'Perempuan';
        } else {
            return 'Status tidak diketahui';
        }
    }
}
