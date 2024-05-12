<x-dashboard-admin>
    <style>
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .article-container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .article-title {
            font-size: 20px;
            color: #333333;
            margin-bottom: 10px;
        }

        .article-content {
            font-size: 16px;
            color: #666666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .article-meta {
            font-size: 14px;
            color: #999999;
            margin-bottom: 10px;
        }

        .article-container:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }
    </style>

    <div class="container">
        @forelse ($data as $lapor)
            <div class="article-container">
                <h2 class="article-title">Nama: {{ $lapor->nama }}</h2>
                <p class="article-meta">Alamat Kejaian: {{ $lapor->alamat }}</p>
                <p class="article-meta">Alamat Rumah: {{ $lapor->alamatrumah }}</p>
                <p class="article-meta">Jenis Bencana: {{ $lapor->bencana }}</p>
                <p class="article-meta">Longitude: {{ $lapor->longitude }}</p>
                <p class="article-meta">Latitude: {{ $lapor->latitude }}</p>
                <p class="article-content">Keterangan:<br>{{ $lapor->keterangan }}</p>
            </div>
        @empty
            <div class="article-container">
                <p class="article-content">Tidak ada berita tersedia.</p>
            </div>
        @endforelse
    </div>
</x-dashboard-admin>
