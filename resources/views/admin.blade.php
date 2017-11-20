@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>
 
                <div class="panel-body">
                    <div class="alert alert-success">
                        <p>
                            Halaman Admin
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover tabel-bordered">
                                
                                <a href=" {{ route('result.allShow') }} " class="btn btn-primary"> Hasil Nilai</a>

                                    <center>
                                    <h3>Daftar Nama Siswa</h3>
                                    </center>
                                    <thead>
                                        <tr>
                                            <th width="5">No</th>
                                            <th> Nama Siswa</th>
                                            <th> Nilai</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $i => $user)
                                            <tr>
                                                <td>{{ $i+1 }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection