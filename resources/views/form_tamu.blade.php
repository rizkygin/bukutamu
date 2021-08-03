@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row ustify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('tamu_submit')}}" method="POST">
                    @csrf
                    <label for="penerima" class="col-form-label col-md-2">Nama Tamu <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <input type="text" name="nama" id="nama" class="form-control m-b-5">
                    </div>
                    <label for="penerima" class="col-form-label col-md-2">Instansi <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <select name="instansi" class="form-control m-b-5">
                            @foreach ($instansis as $instansi)
                            <option value="{{$instansi->id}}">{{$instansi->nama_instansi}}</option>
                            @endforeach

                        </select>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary">
                        Absen
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection