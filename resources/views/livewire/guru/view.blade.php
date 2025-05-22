<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-4 mt-6">
    <div class="px-2 mb-4 flex justify-center items-center">
        <img src="{{ asset('storage/'.$guru->foto) }}" class="w-28 h-28 object-cover rounded-full" alt="{{ $guru->foto }}">
    </div>

    <!-- Bento -->
    <div class="grid grid-cols-6 grid-rows-3 gap-4">
        <div class="col-span-3">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">Nama</h3>
                <p class="text-gray-700 mt-2">{{ $guru->nama }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">NIP</h3>
                <p class="text-gray-700 mt-2">{{ $guru->nip }}</p>
            </div>
        </div>
        <div class="col-span-3 row-start-2">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">Gender</h3>
                <p class="text-gray-700 mt-2">{{ $this->ketGender($guru->gender) }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4 row-start-2">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">Alamat</h3>
                <p class="text-gray-700 mt-2">{{ $guru->alamat }}</p>
            </div>
        </div>
        <div class="col-span-3 row-start-3">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">Kontak</h3>
                <p class="text-gray-700 mt-2">{{ $guru->kontak }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4 row-start-3">
            <div class="bg-gray-50 p-4 rounded-lg shadow-sm">
                <h3 class="font-semibold text-lg text-gray-800">Email</h3>
                <p class="text-gray-700 mt-2">{{ $guru->email }}</p>
            </div>
        </div>
    </div>

    <!-- Kembali -->
    <div class="text-center mt-6">
        <a href="{{ route('guru') }}"
           class="inline-block bg-gray-500 text-white px-6 py-3 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition duration-200">
            Kembali
        </a>
    </div>
</div>
