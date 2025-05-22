<div class="p-6 max-w-3xl mx-auto bg-white shadow-md rounded-lg">
    <h2 class="text-xl font-semibold mb-4 text-center text-blue-700">
        {{ $id ? 'Edit Industri' : 'Tambah Industri' }}
    </h2>

    <form wire:submit.prevent="save" class="space-y-4 text-sm">

        <!-- Foto Industri -->
        <div>
            <label class="block text-gray-700 font-medium mb-1">Foto Industri</label>
            <input type="file" wire:model="foto"
                class="w-full text-sm file:mr-3 file:py-1.5 file:px-3 file:rounded file:border-0 file:text-white file:bg-blue-600 hover:file:bg-blue-700" />
            @error('foto') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Nama -->
            <div>
                <label class="block text-gray-700 mb-1">Nama</label>
                <input type="text" wire:model="nama" placeholder="PT. Maju Jaya"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
                @error('nama') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Bidang Usaha -->
            <div>
                <label class="block text-gray-700 mb-1">Bidang Usaha</label>
                <input type="text" wire:model="bidang_usaha" placeholder="Teknologi"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
                @error('bidang_usaha') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Alamat -->
            <div class="md:col-span-2">
                <label class="block text-gray-700 mb-1">Alamat</label>
                <textarea wire:model="alamat" rows="2" placeholder="Jl. Contoh No.123"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800"></textarea>
                @error('alamat') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Kontak -->
            <div>
                <label class="block text-gray-700 mb-1">Kontak</label>
                <textarea wire:model="kontak" rows="2" placeholder="0812xxxxxxx"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800"></textarea>
                @error('kontak') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 mb-1">Email</label>
                <textarea wire:model="email" rows="2" placeholder="email@domain.com"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800"></textarea>
                @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Website -->
            <div>
                <label class="block text-gray-700 mb-1">Website</label>
                <input type="text" wire:model="website" placeholder="https://..."
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
                @error('website') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <!-- Guru Pembimbing -->
            <div>
                <label class="block text-gray-700 mb-1">Guru Pembimbing</label>
                <select wire:model="guru_pembimbing"
                    class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800">
                    <option value="">Pilih Guru</option>
                    @foreach($guruList as $guru)
                        <option value="{{ $guru->id }}">{{ $guru->nama }}</option>
                    @endforeach
                </select>
                @error('guru_pembimbing') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Tombol -->
        <div class="flex justify-end space-x-3 pt-4">
            <a href="{{ route('industri') }}"
                class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-600 text-sm">
                Batal
            </a>
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm">
                Simpan
            </button>
        </div>
    </form>
</div>
