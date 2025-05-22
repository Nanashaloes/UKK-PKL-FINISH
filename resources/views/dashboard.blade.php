<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col gap-6 p-6 bg-white text-gray-800">

        <!-- Pengenalan Aplikasi -->
        <div class="bg-blue-50 p-5 rounded-xl shadow border border-blue-100">
            <h2 class="text-2xl font-bold text-center text-blue-600">Selamat datang di SijaSpace</h2>
            <p class="mt-3 text-gray-600 max-w-3xl mx-auto text-center leading-relaxed">
                Platform ini membantu Anda dalam mengelola data siswa SIJA secara efisien, mulai dari informasi pribadi hingga pengawasan kegiatan PKL.
            </p>
        </div>

        <!-- Statistik Sederhana -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h3 class="text-sm font-medium text-gray-500">Jumlah Siswa</h3>
                <p class="text-3xl font-bold text-blue-600 mt-1">66</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h3 class="text-sm font-medium text-gray-500">Siswa Aktif PKL</h3>
                <p class="text-3xl font-bold text-blue-600 mt-1">7</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                <h3 class="text-sm font-medium text-gray-500">Industri Terdaftar</h3>
                <p class="text-3xl font-bold text-blue-600 mt-1">3</p>
            </div>
        </div>

        <!-- Aktivitas Terbaru -->
        <div class="bg-white p-6 rounded-xl shadow border border-gray-200">
            <h3 class="text-lg font-semibold text-blue-600 mb-4 text-center">Aktivitas Terbaru</h3>
            
            @if(count($aktivitas) > 0)
                <ul class="space-y-3">
                    @foreach(array_slice($aktivitas, 0, 4) as $item)
                        <li class="bg-blue-50 p-4 rounded-lg border border-blue-100 hover:bg-blue-100 transition text-sm">
                            <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                                <div>
                                    <p class="font-medium text-gray-800">{{ $item['nama'] }}</p>
                                    <p class="text-gray-500">{{ $item['kegiatan'] }}</p>
                                </div>
                                <div class="text-gray-400 mt-2 md:mt-0 text-xs md:text-sm">
                                    {{ \Carbon\Carbon::parse($item['tanggal'])->translatedFormat('d M Y H:i') }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-center text-gray-400">Belum ada aktivitas.</p>
            @endif
        </div>

    </div>
</x-layouts.app>
