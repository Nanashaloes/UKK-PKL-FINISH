<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-4 mt-6">
    <div class="px-2 mb-4 flex justify-center items-center">
        <img src="{{ asset('storage/'.$siswa->foto) }}" class="w-28 h-28 object-cover rounded-full" alt="{{ $siswa->foto }}">
    </div>

    <!-- Bento Grid -->
    <div class="grid grid-cols-6 grid-rows-4 gap-3 text-sm">
        <div class="col-span-3">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">Nama</h3>
                <p class="text-gray-700 mt-1">{{ $siswa->nama }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">NIS</h3>
                <p class="text-gray-700 mt-1">{{ $siswa->nis }}</p>
            </div>
        </div>

        <div class="col-span-3 row-start-2">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">Gender</h3>
                <p class="text-gray-700 mt-1">{{ $this->ketGender($siswa->gender) }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4 row-start-2">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">Alamat</h3>
                <p class="text-gray-700 mt-1">{{ $siswa->alamat }}</p>
            </div>
        </div>

        <div class="col-span-3 row-start-3">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">Kontak</h3>
                <p class="text-gray-700 mt-1">{{ $siswa->kontak }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4 row-start-3">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm">
                <h3 class="font-semibold text-gray-800">Email</h3>
                <p class="text-gray-700 mt-1">{{ $siswa->email }}</p>
            </div>
        </div>

        <div class="col-span-6 row-start-4">
            <div class="bg-gray-50 p-3 rounded-md shadow-sm text-center">
                <h3 class="font-semibold text-gray-800">Status PKL</h3>
                <p class="text-gray-700 mt-1">{{ $this->ketStatusPKL($siswa->status_pkl) }}</p>
            </div>
        </div>
    </div>

    <!-- Tombol Kembali -->
    <div class="text-center mt-4">
        <a href="{{ route('siswa') }}"
           class="inline-block bg-gray-500 text-white px-5 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200 text-sm">
            Kembali
        </a>
    </div>
</div>
