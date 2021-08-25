<div class="table-responsive">
    <table id="dataMaster2" class="table table-striped table-bordered first">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Nama Industri</th>
                <th>Produk</th>
                <th>Pemilik</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 0; @endphp
            @foreach ($industri as $data) @php $no++; @endphp
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nama_perusahaan }}</td>
                    <td>{{ $data->nama_produk }}</td>
                    <td>{{ $data->pemilik }}</td>
                    <td>
                        <a href="{{ url('industri/recover/'.$data->id_industri) }}" class="btn btn-primary btn-sm btn-rounded">
                            Recover
                        </a>
                        <button data-toggle="modal" data-target="#exampleModal{{$data->id_industri}}" class="btn btn-danger btn-sm btn-rounded">
                            Hapus Permanent
                        </button>
                    </td>
                </tr>
                 {{-- Modal to delete --}}
                 <div class="modal fade" id="exampleModal{{$data->id_industri}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $data->nama_perusahaan }}</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </a>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda ingin menghapus data ini?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="industri/permanent_delete/{{ $data->id_industri }}" class="btn btn-secondary">Hapus</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal">Tidak</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>