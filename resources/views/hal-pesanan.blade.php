@extends('layouts.app')

@section('content')
<div class="container py-4" style="background: linear-gradient(to bottom, #ffe259, #ffa751); border-radius: 15px; max-width: 900px; margin: auto;">
    <h4 class="font-weight-bold mb-4 px-3">Riwayat Perjalanan</h4>

    <div class="bg-white p-3 rounded shadow-sm mx-2">
        @php
            $riwayat = [
                ['asal' => 'Terminal Surabaya', 'tujuan' => 'Terminal Yogyakarta', 'tanggal' => 'Kamis, 19 Juni 2025 - 05.00', 'reschedule' => true, 'batal' => true],
                ['asal' => 'Yogyakarta', 'tujuan' => 'Denpasar', 'tanggal' => 'Selasa, 2 Februari 2025 - 03.00'],
                ['asal' => 'Bandung', 'tujuan' => 'Malang', 'tanggal' => 'Jumat, 28 Januari 2025 - 12.00'],
                ['asal' => 'Semarang', 'tujuan' => 'Solo', 'tanggal' => 'Selasa, 25 Januari 2025 - 21.00'],
            ];
        @endphp

        @foreach($riwayat as $index => $trip)
            <div class="d-flex align-items-center justify-content-between p-3 mb-3 rounded" style="background-color: #f9f9f9; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                <div class="d-flex align-items-center">
                    <i class="fa fa-bus-alt text-danger mr-3 fa-2x"></i>
                    <div>
                        <div class="font-weight-bold">{{ $trip['asal'] }} → {{ $trip['tujuan'] }}</div>
                        <div class="text-muted">{{ $trip['tanggal'] }}</div>
                    </div>
                </div>

                <div>
                    @if(!empty($trip['reschedule']))
                        <a href="{{ url('/reschedule') }}" onclick="return confirmReschedule()" class="btn btn-sm btn-secondary mr-2">Reschedule</a>
                    @endif
                    @if(!empty($trip['batal']))
                        <button class="btn btn-sm btn-danger" onclick="showConfirm()">Batal</button>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal -->
<div id="confirmModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:10000;">
    <div style="background:white; padding:20px; border-radius:10px; width:300px; margin:15% auto; text-align:center;">
        <p class="font-weight-bold mb-4">Apakah Anda yakin ingin membatalkan perjalanan Anda?</p>
        <button onclick="redirectToCancel()" class="btn btn-danger mr-2">Iya</button>
        <button onclick="hideConfirm()" class="btn btn-secondary">Tidak</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function showConfirm() {
        document.getElementById('confirmModal').style.display = 'block';
    }

    function hideConfirm() {
        document.getElementById('confirmModal').style.display = 'none';
    }

    function redirectToCancel() {
        window.location.href = "{{ url('form-pembatalan') }}";
    }

    function confirmReschedule() {
        return confirm("Apakah Anda yakin ingin menjadwalkan ulang perjalanan Anda?");
    }
</script>
@endsection
