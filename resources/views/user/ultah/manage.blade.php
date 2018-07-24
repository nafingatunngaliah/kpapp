@extends('layouts.index')
@section('manage-ultah')
<section id="inner-headline">
    <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
                <h2>Kelola <strong> Data Pegawai</h2>
            </div>
          </div>
        </div>
      </div>
</section>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
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
    </div>
</section>

@endsection