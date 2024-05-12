<x-dashboard-admin>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h1 class="text-xl font-semibold mb-4">Formulir Laporan Bencana</h1>
            <form action="/berita/store" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="alamatrumah" class="block text-sm font-medium text-gray-700">Alamat Rumah</label>
                    <input type="text" name="alamatrumah" id="alamatrumah" placeholder="Alamatrumah"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="bencana" class="block text-sm font-medium text-gray-700">Jenis Bencana</label>
                    <input type="text" name="bencana" id="bencana" placeholder="Jenis Bencana"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude</label>
                    <input type="text" name="longitude" id="longitude" placeholder="longitude"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude</label>
                    <input type="text" name="latitude" id="latitude" placeholder="latitude"
                        class="mt-1 p-2 border border-gray-300 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" placeholder="Keterangan"
                        class="mt-1 p-2 border border-gray-300 rounded w-full h-32 resize-none"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Submit</button>
            </form>
        </div>
    </div>
</x-dashboard-admin>
