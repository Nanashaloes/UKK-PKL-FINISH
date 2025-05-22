<div class="p-6 max-w-3xl mx-auto bg-white shadow-md rounded-lg text-sm">
    <h2 class="text-xl font-semibold mb-4 text-center text-blue-700">
        {{ $id ? 'Edit Siswa' : 'Tambah Siswa' }}
    </h2>

    <form wire:submit.prevent="save" class="space-y-4">

        <!-- Foto -->
        <div>
            <label class="block text-gray-700 font-semibold mb-1 text-sm">Foto Siswa</label>
            <input type="file" wire:model="foto"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
            @error('foto') <span class="text-red-500 text-xs">{{ $message }}</span>@enderror
        </div>

        <!-- Nama -->
        <div>
            <label class="block text-gray-700 mb-1">Nama</label>
            <input type="text" wire:model="nama"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
            @error('nama') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- NIS -->
        <div>
            <label class="block text-gray-700 mb-1">NIS</label>
            <input type="text" wire:model="nis"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
            @error('nis') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Gender -->
        <div>
            <label class="block text-gray-700 mb-1">Gender</label>
            <div class="flex gap-6 mt-1">
                <label class="inline-flex items-center">
                    <input type="radio" wire:model="gender" value="L" class="form-radio text-blue-600" />
                    <span class="ml-2 text-gray-700 text-sm">Laki Laki</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" wire:model="gender" value="P" class="form-radio text-blue-600" />
                    <span class="ml-2 text-gray-700 text-sm">Perempuan</span>
                </label>
            </div>
            @error('gender') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Alamat -->
        <div>
            <label class="block text-gray-700 mb-1">Alamat</label>
            <textarea wire:model="alamat" rows="2"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800"></textarea>
            @error('alamat') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Kontak -->
        <div>
            <label class="block text-gray-700 mb-1">Kontak</label>
            <input type="text" wire:model="kontak"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
            @error('kontak') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div>
            <label class="block text-gray-700 mb-1">Email</label>
            <input type="email" wire:model="email"
                class="w-full px-3 py-2 border border-gray-300 rounded focus:ring-1 focus:ring-blue-500 focus:outline-none text-gray-800" />
            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>

        <!-- Status PKL -->
        <!-- Status PKL -->
        <div>
            <label class="block text-gray-700 mb-1">Status PKL</label>
            <div class="flex gap-6 mt-1">
                <label class="inline-flex items-center">
                    <input type="radio" wire:model="status_pkl" value="0" class="form-radio text-blue-600" />
                    <span class="ml-2 text-gray-700 text-sm">Belum diterima PKL</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" wire:model="status_pkl" value="1" class="form-radio text-blue-600" />
                    <span class="ml-2 text-gray-700 text-sm">Sudah diterima PKL</span>
                </label>
            </div>
            @error('status_pkl') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>


        <div class="flex justify-end space-x-3 pt-4">
            <a href="{{ route('siswa') }}"
                class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-600 text-sm focus:outline-none focus:ring-2 focus:ring-gray-500">
                Batal
            </a>

            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                Simpan
            </button>
        </div>
    </form>
</div>
