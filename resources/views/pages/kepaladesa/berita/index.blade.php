<x-dashboard-admin>
    <style>
        /* Mempercantik tampilan tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            /* Memberi warna abu-abu pada border */
            padding: 8px;
            text-align: left;
        }

        /* Warna latar belakang dan teks untuk header */
        th {
            background-color: #f2f2f2;
            /* Warna latar belakang abu-abu muda */
            color: #333;
            /* Warna teks hitam */
        }

        /* Warna latar belakang dan teks untuk baris ganjil */
        tr:nth-child(odd) {
            background-color: #f9f9f9;
            /* Warna latar belakang abu-abu terang */
        }

        /* Warna latar belakang dan teks untuk baris genap */
        tr:nth-child(even) {
            background-color: #ffffff;
            /* Warna latar belakang putih */
        }

        /* Tombol Edit */



        /* Tombol Tambah Berita */
        .btn-primary {
            background-color: #28a745;
            /* Warna hijau */
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            /* Warna hijau yang sedikit lebih gelap saat hover */
            border-color: #1e7e34;
        }

        /* Mengatur margin untuk tombol Tambah Berita */
        .btn-add {
            margin-top: 20px;
        }
    </style>

    @foreach ($data as $berita)
        <table>
            <tr>
                <td>
                    <strong>Alamat Rumah:</strong> {{ $berita->alamatrumah }}<br>
                    <strong>Alamat Kejadian:</strong> {{ $berita->alamat }}<br>
                    <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($berita->tanggal)->toFormattedDateString() }}<br>
                    <strong>Bencana:</strong> {{ $berita->bencana }}<br>
                    <strong>Longitude:</strong> {{ $berita->longitude }}<br>
                    <strong>Latitude:</strong> {{ $berita->latitude }}<br>
                    <strong>Keterangan:</strong> {{ $berita->keterangan }}<br><br>
                    <a href="{{ route('edit', $berita->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        </table>
    @endforeach

    <!-- Tombol Tambah Berita -->
    <a href="{{ route('create') }}" class="btn btn-primary btn-add">Tambah Berita</a>
</x-dashboard-admin>
