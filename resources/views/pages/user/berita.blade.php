<x-user-layout>
    <div>
        <h1>1</h1>
        <h1> .</h1>
    </div>
    <div class="container mx-auto px-4">
        <div class="my-8">

        </div>
        <form action="{{ route('beritauser.search') }}" method="GET" class="flex justify-center">
            <input type="text" name="search" placeholder="Cari Berita..." required
                class="w-full sm:w-auto py-2 px-4 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
            <button type="submit"
                class="ml-2 bg-blue-500 hover:bg-blue-600 text-blue py-2 px-4 rounded-lg focus:outline-none focus:bg-blue-600">Cari</button>
        </form>
        @forelse ($data as $berita)
            <div class="my-4 border border-gray-300 rounded-lg p-4">
                <p><strong>Alamat Kejadian:</strong> {{ $berita->alamat }}</p>
                <p><strong>Alamat Rumah:</strong> {{ $berita->alamatrumah }}</p>
                <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($berita->tanggal)->toFormattedDateString() }}</p>
                <p><strong>Bencana:</strong> {{ $berita->bencana }}</p>
                <p><strong>Longitude:</strong> {{ $berita->longitude }}</p>
                <p><strong>Latitude:</strong> {{ $berita->latitude }}</p>
                <p><strong>Keterangan:</strong> {{ $berita->keterangan }}</p>
            </div>
        @empty
            <p class="text-center">Tidak ada berita yang ditemukan.</p>
        @endforelse
    </div>
</x-user-layout>
