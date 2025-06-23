@extends('layouts.app')

@section('content')
<div class="container py-4" style="max-width: 800px;">
    <div class="card shadow p-4">
        <h4 class="mb-4 font-weight-bold text-danger"><i class="fas fa-exclamation-circle mr-2"></i>Perubahan Jadwal</h4>

        <form id="rescheduleForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nama Penumpang</label>
                    <input type="text" class="form-control" value="Mimi mimi" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Tanggal Keberangkatan</label>
                    <input type="text" class="form-control" value="-">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Armada</label>
                    <input type="text" class="form-control" value=" Haryanto 01" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label>Waktu Keberangkatan</label>
                    <input type="text" class="form-control" value= "-" >
                </div>
            </div>

            <div class="form-group col-md-6">
                <label>Kursi</label>
                <input type="text" class="form-control" value="5" readonly>
                <small class="form-text text-muted">Catatan: Jenis armada dan kursi tidak dapat dirubah.</small>
            </div>

            <div class="mt-4 text-right">
                <button type="button" class="btn btn-danger" onclick="showModal()">
                    Konfirmasi
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Modal Manual Tanpa jQuery -->
<div id="confirmModal" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999;">
    <div style="margin:10% auto; background:white; border-radius:10px; padding:20px; max-width:400px; text-align:center;">
        <p class="font-weight-bold">Apakah Anda yakin ingin mengubah jadwal perjalanan ini?</p>
        <button class="btn btn-danger mr-2" onclick="redirectToDetail()">Ya, Lanjutkan</button>
        <button class="btn btn-secondary" onclick="hideModal()">Batal</button>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function showModal() {
        document.getElementById("confirmModal").style.display = "block";
    }

    function hideModal() {
        document.getElementById("confirmModal").style.display = "none";
    }

    function redirectToDetail() {
        window.location.href = "{{ route('tiket.detail') }}";
    }
</script>
@endsection
