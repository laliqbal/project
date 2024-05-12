<x-user-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
            <h1 class="text-xl font-semibold mb-4">Laporkan Bencana</h1>
            <form action="/lapor/store" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama:</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="alamatrumah" class="block text-sm font-medium text-gray-700">Alamat Rumah:</label>
                    <input type="text" id="alamatrumah" name="alamatrumah" placeholder="Alamatrumah"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Kejadian:</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal:</label>
                    <input type="date" id="tanggal" name="tanggal"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="bencana" class="block text-sm font-medium text-gray-700">Jenis Bencana:</label>
                    <select id="bencana" name="bencana" onchange="document.getElementById('lainnya').value=this.value"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                        <option value="banjir"></option>
                        <option value="banjir">Banjir</option>
                        <option value="tanah longsor">Tanah Longsor</option>
                        <option value="gempa bumi">Gempa Bumi</option>
                        <option value="sunami">Sunami</option>
                        <option value="gunung meletus">Gunung Meletus</option>
                        <option value="puting beliung">Puting Beliung</option>
                        <option value="kebakaran">Kebakaran</option>
                    </select>
                    <input type="text" id="lainnya" name="lainnya" placeholder="Jenis Bencana Lainnya"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude:</label>
                    <input type="text" id="longitude" name="longitude" placeholder="Longitude"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude:</label>
                    <input type="text" id="latitude" name="latitude" placeholder="Latitude"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500">
                </div>
                <div class="form-group mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan:</label>
                    <textarea id="keterangan" name="keterangan" placeholder="Keterangan"
                        class="mt-1 p-2 border border-gray-300 rounded w-full focus:outline-none focus:ring focus:border-blue-500"></textarea>
                </div>
                <div class="flex justify-between">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200">Submit
                        Web</button>
                    <button type="submit"
                        class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500 transition duration-200">Batal</button>
                </div>
            </form>
        </div>
    </div>
</x-user-layout>
