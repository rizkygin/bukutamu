@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a type="button" href="{{route('absen_tamu')}}" 
            class="btn btn-success">Presensi</a>

            <p></p>
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                    </thead>
                    <?php $no = 0?>
                    @foreach ($data as $tamu)
                    <?php $no++?>
                    <tr>
                        <td>{{$no}}</td>
                        <td>
                            {{$tamu->nama}}
                        </td>
                        <td>
                            {{$tamu->instansi->nama_instansi}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection