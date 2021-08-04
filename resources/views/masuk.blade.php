@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-primary" role="alert">
        {{session('status')}}
    </div>
    @endif
    @if (session('danger'))
    <div class="alert alert-danger" role="alert">
        {{session('danger')}}
    </div>
    @endif
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-8">
                    <a type="button" href="{{route('absen_tamu')}}" class="btn btn-success">Presensi</a>

                </div>
                <div class="col-md-4">
                    <span>

                    </span>
                </div>
            </div>

            <p></p>
            <div class="card">
                <table class="table table-striped">
                    <thead>
                        <th>Nomor</th>
                        <th>Nama</th>
                        <th>Instansi</th>
                        <th>Aksi</th>
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
                        <td>
                            <span class="badge bg-warning"><a href="{{route('tamu_edit',$tamu->id)}}"
                                    style="text-decoration: none; color:black;"> Edit</a></span>
                            {{-- <form action="{{route('hapus_tamu',$tamu->id)}}" method="POST">
                            @csrf
                            <span>
                                <button type="submit" class="badge bg-danger">
                                    hapus
                                </button>
                            </span>
                            </form> --}}
                            <span class="badge bg-danger"><a href="{{route('hapus_tamu',$tamu->id)}}"
                                    style="text-decoration: none; color:black;"> hapus</a></span>



                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection