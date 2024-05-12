<x-dashboard-admin>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h1 class="text-xl font-semibold mb-4">Edit Informasi Berita Bencana</h1>
            <form action="{{ route('update', $berita->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="{{ $berita->alamat }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="alamatrumah" class="block text-sm font-medium text-gray-700">Alamat Rumah:</label>
                    <input type="text" id="alamatrumah" name="alamatrumah" value="{{ $berita->alamatrumah }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <div class="form-group mb-4">
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal" value="{{ $berita->tanggal }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <div class="form-group mb-4">
                    <label for="bencana" class="block text-sm font-medium text-gray-700">Jenis Bencana:</label>
                    <select id="bencana" name="bencana" onchange="document.getElementById('lainnya').value=this.value"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                        <option value="banjir" {{ $berita->bencana === 'banjir' ? 'selected' : '' }}>Banjir</option>
                        <option value="tanah longsor" {{ $berita->bencana === 'tanah longsor' ? 'selected' : '' }}>Tanah
                            Longsor</option>
                        <option value="gempa bumi" {{ $berita->bencana === 'gempa bumi' ? 'selected' : '' }}>Gempa Bumi
                        </option>
                        <option value="tsunami" {{ $berita->bencana === 'tsunami' ? 'selected' : '' }}>Tsunami</option>
                        <option value="gunung meletus" {{ $berita->bencana === 'gunung meletus' ? 'selected' : '' }}>
                            Gunung Meletus</option>
                        <option value="puting beliung" {{ $berita->bencana === 'puting beliung' ? 'selected' : '' }}>
                            Puting Beliung</option>
                        <option value="kebakaran" {{ $berita->bencana === 'kebakaran' ? 'selected' : '' }}>Kebakaran
                        </option>
                    </select>
                    <input type="text" id="lainnya" name="lainnya" value="{{ $berita->bencana }}">
                </div>

                <div class="form-group mb-4">
                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude:</label>
                    <input type="text" id="longitude" name="longitude" value="{{ $berita->longitude }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <div class="form-group mb-4">
                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude:</label>
                    <input type="text" id="latitude" name="latitude" value="{{ $berita->latitude }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <div class="form-group mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan:</label>
                    <input type="text" id="keterangan" name="keterangan" value="{{ $berita->keterangan }}"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Simpan
                    Perubahan</button>
            </form>
        </div>
    </div>
</x-dashboard-admin>
