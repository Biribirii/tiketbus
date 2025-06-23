<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TIXpress</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gradient-to-r from-orange-400 to-yellow-300 min-h-screen font-sans text-sm">

    <div class="max-w-2xl mx-auto py-6 px-4 space-y-4">

      <!-- Header -->
      <div class="flex justify-between items-center text-white">
        <h1 class="font-bold text-xl">TIXpress 🚍 </h1>

      <div class="flex space-x-2">
        <a href="{{ route('lokasi_bus') }}">
          <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
            Live Lokasi
          </button>
        </a>
        <a href="{{ route('pesanan') }}">
          <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
            Pesanan
          </button>
        </a>
        <a href="{{ route('akun.pengguna') }}">
          <button type="button" class="bg-white text-orange-500 font-semibold px-3 py-1 rounded hover:bg-gray-100 shadow">
            Account
          </button>
        </a>
      </div>
    </div>

      <!-- Form Pencarian -->
      <form action="{{ route('halamanpo') }}" method="GET" class="bg-white p-4 rounded shadow space-y-2">
        <div class="grid grid-cols-2 gap-2 md:grid-cols-4">
          <select name="asal" class="border p-2 rounded text-gray-600" required>
            <option value="" disabled {{ request('asal') ? '' : 'selected' }}>Keberangkatan</option>
            @foreach (['Jakarta','Surabaya','Bandung','Yogyakarta','Semarang','Medan','Palembang','Makassar','Denpasar','Pontianak'] as $kota)
              <option value="{{ $kota }}" {{ request('asal') == $kota ? 'selected' : '' }}>{{ $kota }}</option>
            @endforeach
          </select>

          <select name="tujuan" class="border p-2 rounded text-gray-600" required>
            <option value="" disabled {{ request('tujuan') ? '' : 'selected' }}>Tujuan</option>
            @foreach (['Jakarta','Surabaya','Bandung','Yogyakarta','Semarang','Medan','Palembang','Makassar','Denpasar','Pontianak','Solo'] as $kota)
              <option value="{{ $kota }}" {{ request('tujuan') == $kota ? 'selected' : '' }}>{{ $kota }}</option>
            @endforeach
          </select>

          <input type="date" name="tanggal" value="{{ request('tanggal') }}" class="border p-2 rounded" required>

          <select name="penumpang" class="border p-2 rounded text-gray-600" required>
            @for ($i = 1; $i <= 6; $i++)
              <option value="{{ $i }}" {{ request('penumpang') == $i ? 'selected' : '' }}>{{ $i }} Orang</option>
            @endfor
          </select>
        </div>
        <button class="w-full bg-blue-600 text-white font-semibold py-2 rounded">Cari</button>
      </form>

      <!-- Hasil Pencarian -->
      @if(count($poList) > 0)
        <div class="space-y-4">
          @foreach ($poList as $po)
            <div class="bg-white p-4 rounded shadow space-y-2">
              <div class="flex justify-between items-center">
                <h3 class="font-bold text-orange-500"> {{ $po->asal }} → {{ $po->tujuan }}</h3>
                <span class="bg-yellow-300 text-xs font-semibold px-2 py-1 rounded">Tanggal: {{ \Carbon\Carbon::parse($po->tanggal)->format('d M Y') }}</span>
              </div>
              <div class="space-y-1 text-gray-700">
                <p><span class="font-semibold">Keberangkatan:</span> {{ $po->asal }}</p>
                <p><span class="font-semibold">Tujuan:</span> {{ $po->tujuan }}</p>
                <p><span class="font-semibold">Harga:</span> Rp {{ number_format($po->harga, 0, ',', '.') }}</p>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-green-600 text-sm">Silakan pilih untuk melihat bus yang tersedia</span>
                <a href="{{ route('detail.tiket', ['id_rute' => $po->id_rute]) }}"
                  class="bg-[#d32f2f] hover:bg-red-800 text-white font-bold px-6 py-3 rounded-full shadow-md transition duration-300">
                  Beli
                </a>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="bg-white p-4 rounded shadow text-center text-gray-700">
          <p>Tidak ada rute ditemukan untuk pilihan tersebut.</p>
        </div>
      @endif

      <!-- Tombol kembali -->
      <div class="flex justify-center">
        <a href="{{ route('homeUser') }}">
          <button type="button" class="bg-red-500 text-white font-semibold px-4 py-2 rounded shadow">Kembali</button>
        </a>
      </div>

    </div>
  </body>
</html>
