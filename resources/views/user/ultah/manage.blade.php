@extends('layouts.index')
@section('manage-ultah')

<section id="content">
    <div class="container">
        
        <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Data Table</h3>
                            <p class="text-muted m-b-30">Data table example</p>
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tanggal Ulang Tahun</th>
                                            <th>Deskripsi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($ultah as $u)
                                        <tr class="info">
                                            <td>{{ $u->id_bd }}</td>
                                            <td>{{ $u->nama }}</td>
                                            <td>{{ date('m-d-Y', strtotime($u->tgl_bd)) }}</td>
                                            <td>{{ $u->deskripsi }}</td>
                                            <td>
                                                <a class="btn btn-large btn-theme btn-rounded" href="{{url('ultah-edit', array($u->id_bd))}}">Edit</a>
                                                <a class="btn btn-large btn-theme btn-rounded" href="{{url('ultah-delete', array($u->id_bd))}}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

    </div>
</section>

@endsection