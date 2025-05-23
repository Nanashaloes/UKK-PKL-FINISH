<div class="p-5 space-y-5 bg-gradient-to-b from-blue-300 to-blue-400 rounded-xl shadow-md text-white">
    <div class="border border-blue-700 rounded-xl p-0 bg-white shadow-inner overflow-hidden">
        <div class="siswa-container h-[calc(100vh-200px)] flex flex-col">
            {{-- Header --}}
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 bg-gradient-to-r from-blue-700 to-blue-600 text-white">
                <a href="{{ route('siswa.create') }}"
                   class="bg-white hover:bg-blue-50 text-blue-700 font-medium px-4 py-2 rounded-lg transition duration-200 flex items-center gap-2 shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Tambah Siswa
                </a>

                <h2 class="text-xl font-bold">Daftar Siswa</h2>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="w-4 h-4 text-blue-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input
                        wire:model.live="search"
                        type="text"
                        placeholder="Cari siswa..."
                        class="pl-10 pr-4 py-2 w-60 rounded-lg bg-blue-800/30 border border-blue-500 text-white placeholder-blue-200 focus:outline-none focus:ring-2 focus:ring-white/50"
                    />
                </div>
            </div>

            {{-- Notifikasi --}}
            @if (session()->has('message'))
                <div class="bg-blue-50 text-blue-700 px-6 py-3 m-4 mb-0 rounded-md border-l-4 border-blue-500 flex items-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    {{ session('message') }}
                </div>
            @endif

            {{-- Tabel --}}
            <div class="overflow-auto flex-1 mx-4 my-4 rounded-xl border border-gray-200 shadow-sm bg-white">
                <table class="min-w-full text-sm text-gray-700 border-collapse">
                    <thead class="bg-gradient-to-r from-blue-700 to-blue-600 text-white text-xs uppercase sticky top-0 z-10">
                        <tr>
                            <th class="px-6 py-3 text-left">Nama</th>
                            <th class="px-6 py-3 text-left">NIS</th>
                            <th class="px-6 py-3 text-left">Jenis Kelamin</th>
                            <th class="px-6 py-3 text-left">Status PKL</th>
                            <th class="px-6 py-3 text-left">Kontak</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @forelse ($siswaList as $siswa)
                            <tr class="hover:bg-blue-50 transition-colors duration-150">
                                <td class="px-6 py-3 whitespace-nowrap">{{ $siswa->nama }}</td>
                                <td class="px-6 py-3 whitespace-nowrap">{{ $siswa->nis }}</td>
                                <td class="px-6 py-3 whitespace-nowrap">{{ $this->ketGender($siswa->gender) }}</td>
                                <td class="px-6 py-3 whitespace-nowrap">
                                    @php
                                        $statusClass = match($siswa->status_pkl) {
                                            1 => 'bg-yellow-100 text-yellow-800 border-yellow-200',
                                            2 => 'bg-green-100 text-green-800 border-green-200',
                                            3 => 'bg-blue-100 text-blue-800 border-blue-200',
                                            default => 'bg-gray-100 text-gray-800 border-gray-200'
                                        };
                                    @endphp
                                    <span class="px-3 py-1 text-xs rounded-full {{ $statusClass }} border">
                                        {{ $this->ketStatusPKL($siswa->status_pkl) }}
                                    </span>
                                </td>
                                <td class="px-6 py-3 whitespace-nowrap">{{ $siswa->kontak }}</td>
                                <td class="px-6 py-3 text-center whitespace-nowrap">
                                    <div x-data="{ open: false }" class="relative inline-block">
                                        <button @click="open = !open"
                                                class="bg-gray-100 hover:bg-gray-200 p-1.5 rounded-lg text-gray-600 hover:text-blue-700 focus:outline-none transition-colors duration-150">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                            </svg>
                                        </button>
                                        <div x-show="open" x-transition @click.away="open = false"
                                             class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg z-50">
                                            <a href="{{ route('siswa.show', $siswa->id) }}"
                                               class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700 rounded-t-lg">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                                Lihat
                                            </a>
                                            <a href="{{ route('siswa.edit', $siswa->id) }}"
                                               class="flex items-center px-4 py-2.5 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-700">
                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                                Edit
                                            </a>
                                            <button wire:click="delete({{ $siswa->id }})"
                                                class="flex items-center w-full text-left px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 rounded-b-lg">

                                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                          d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                                Hapus
                                            </button>
                                        </div>
                                        @if ($deleteId)
                                        <div class="fixed inset-0 bg-gray-900/80 backdrop-blur-lg flex items-center justify-center z-50">

                                            <div class="bg-gray-800 p-6 rounded shadow-lg text-white">
                                                <p>Yakin ingin menghapus data ini?</p>
                                                <div class="mt-4 flex justify-end space-x-3">
                                                    <button
                                                        wire:click="delete({{ $deleteId }})"
                                                        class="bg-red-600 hover:bg-red-500 px-4 py-2 rounded transition-colors duration-200"
                                                    >
                                                        Ya
                                                    </button>
                                                    <button
                                                        wire:click="$set('deleteId', null)"
                                                        class="bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded transition-colors duration-200"
                                                    >
                                                        Batal
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center px-6 py-10 text-gray-500 bg-gray-50">
                                    <svg class="w-12 h-12 mx-auto text-gray-400 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <p class="text-base">Tidak ada data ditemukan.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            {{-- Pagination --}}
            <div class="flex justify-between items-center px-6 py-3 bg-gray-50 border-t border-gray-200">
                <div class="flex items-center gap-2">
                    <label for="perPage" class="text-sm text-gray-600">Tampilkan:</label>
                    <select wire:model="numpage" wire:change="updatePageSize($event.target.value)"
                            class="bg-white border border-gray-300 text-gray-700 rounded-md px-3 py-1 focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="{{ $siswaList->total() }}">Semua</option>
                    </select>
                    <span class="text-sm text-gray-600">data per halaman</span>
                </div>
                <div>
                    {{ $siswaList->links('vendor.pagination.tailwind') }}
                </div>
            </div>
        </div>
    </div>
</div>
