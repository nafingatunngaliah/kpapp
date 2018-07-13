@extends('layouts.index')
@section('manage-ultah')


<div class="span12" style="margin-left: 100px">
    <h4>Use contextual classes to color table rows</h4>
    <a class="btn btn-large btn-theme btn-rounded" href="{{url('ultah-tambah')}}">Add</a>
    <table class="table">
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
                <td>{{ $u->tgl_bd }}</td>
                <td>{{ $u->deskripsi }}</td>
                <td>
                	<a class="btn btn-large btn-theme btn-rounded" href="{{url('ultah-edit')}}">Edit</a>
                	<a class="btn btn-large btn-theme btn-rounded" href="{{url('ultah-delete')}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection