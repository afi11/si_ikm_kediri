<div class="table-responsive">
    <table id="dataMaster" class="table table-striped table-bordered first">
        <thead class="thead-light">
            <tr>
                <th>No</th>
                <th>Badan Usaha</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no=0; @endphp
            @foreach ($bu as $data) @php $no++; @endphp              
                <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $data->nama_badan_usaha }}</td>
                    <td>
                        <a href="{{ url('badan_usaha/recover/'.$data->id) }}" class="btn-sm text-white btn btn-rounded btn-primary">
                            Restore
                        </a>
                        <a data-toggle="modal" data-target="#exampleModal{{$data->id}}" class="btn-sm text-white btn btn-rounded btn-danger">
                            Hapus Permanen
                        </a>
                    </td>
                </tr>
                {{-- Modal to delete --}}
                <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $data->nama_badan_usaha }}</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </a>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda ingin menghapus data ini?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="badan_usaha/permanent_delete/{{ $data->id }}" class="btn btn-secondary">Hapus</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal">Tidak</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>
</div>