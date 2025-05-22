<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-4 mt-6">
    <div class="px-2 mb-4 flex justify-center items-center">
        <img src="{{ asset('storage/'.$industri->foto) }}" class="w-40 h-28 object-cover rounded-md shadow" alt="{{ $industri->foto }}">
    </div>

    <!-- Bento -->
    <div class="grid grid-cols-6 grid-rows-3 gap-2 text-sm">
        <div class="col-span-3">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Nama</h3>
                <p class="text-gray-700 mt-1">{{ $industri->nama }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Bidang Usaha</h3>
                <p class="text-gray-700 mt-1">{{ $industri->bidang_usaha }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-1 row-start-2">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Alamat</h3>
                <p class="text-gray-700 mt-1">{{ $industri->alamat }}</p>
            </div>
        </div>
        <div class="col-span-3 row-start-2">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Kontak</h3>
                <p class="text-gray-700 mt-1">{{ $industri->kontak }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-1 row-start-3">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Email</h3>
                <p class="text-gray-700 mt-1">{{ $industri->email }}</p>
            </div>
        </div>
        <div class="col-span-3 col-start-4 row-start-3">
            <div class="bg-gray-50 p-3 rounded shadow-sm">
                <h3 class="font-semibold text-gray-800">Guru Pembimbing</h3>
                <p class="text-gray-700 mt-1">{{ $industri->guru ? $industri->guru->nama : 'Tidak ada guru' }}</p>
            </div>
        </div>
    </div>

    <div class="px-2 mt-3 mb-4 bg-gray-50 p-3 rounded shadow-sm text-sm">
        <div class="text-center">
            <h3 class="font-semibold text-gray-800 mb-1">Website Industri</h3>
            <a href="{{ $industri->website }}" class="text-blue-600 hover:underline break-words" target="_blank" rel="noopener noreferrer">
                {{ $industri->website }}
            </a>
        </div>
    </div>

    <!-- Kembali -->
    <div class="text-center mt-4">
        <a href="{{ route('industri') }}"
           class="inline-block bg-gray-500 text-white px-5 py-2 rounded hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-500 transition">
            Kembali
        </a>
    </div>
</div>
