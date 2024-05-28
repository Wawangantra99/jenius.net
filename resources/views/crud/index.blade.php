@extends('components.layouts')

@section('title', 'Welcome')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end align-items-center mt-3 mt-md-0">
            <button class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createData"><i class="ri-add-circle-line align-bottom"></i> Tambah Data</button>
        </div>
        <table id="datatable-table" class="table">
            <thead>
                <tr>
                    <th>Kalimat</th>
                    <th>Pengarang</th>
                    <th>Status</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="updateData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="updateDataLabel" aria-hidden="true">
    <div class="modal-dialog" id="updateDialog">
        <div id="modal-content" class="modal-content">
            <div class="modal-body">
                Loading..
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="createData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="createDataLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div id="modal-content" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Buat Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('crud.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="kalimat">Kalimat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-require" id="kalimat" name="kalimat"
                            placeholder="Masukan Kalimat" required>
                    </div>

                    <div class="mb-3">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control form-require" id="pengarang" name="pengarang"
                            placeholder="Masukan Pengarang" required>
                    </div>

                    <div class="mb-3">
                        <label for="status">Status <span class="text-danger">*</span></label>
                        <select class="form-select" name="status" id="status">
                            <option value="">Pilih</option>
                            <option value="1">Aktif</option>
                            <option value="0">Nonaktif</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="" name="gambar" id="gambar" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script>
        $(function() {
            var table = $('#datatable-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('crud.index') }}",
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        searchable: false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        searchable: false
                    },
                    {
                        data: 'kalimat',
                        name: 'kalimat'
                    },
                    {
                        data: 'pengarang',
                        name: 'pengarang'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        render: function (data) {
                            if (data == 1) {
                                return 'Aktif';
                            } else {
                                return 'Tidak Aktif';
                            }
                        }
                    },
                    {
                        data: 'gambar',
                        name: 'gambar'
                    },
                ]
            });
        });

        $('#updateData').on('shown.bs.modal', function(e) {
            var html = `
                <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Edit Quote</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="${$(e.relatedTarget).data('url')}" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="kalimat">Kalimat <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-require" id="kalimat" name="kalimat"
                                placeholder="Masukan Kalimat" value="${$(e.relatedTarget).data('kalimat')}" required>

                        </div>
                        <div class="mb-3">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control form-require" id="pengarang" name="pengarang"
                                placeholder="Masukan Pengarang" value="${$(e.relatedTarget).data('pengarang')}" required>
                        </div>

                        <div class="mb-3">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select class="form-select" name="status" id="status">
                                <option value="">Pilih</option>
                                <option value="1" ${($(e.relatedTarget).data('status') == '1') ? 'selected' : ''}>Aktif</option>
                                <option value="0" ${($(e.relatedTarget).data('status') == '0') ? 'selected' : ''}>Nonaktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            `;
            $('#modal-content').html(html);
        });
    </script>
@endsection