@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row ustify-content-center">
        <div class="col-md-8">
            <div class="card">
                <?php $route = ''?>
                <form action="<?php (!empty($tamu->id)) ? $route = route('update_tamu',$tamu->id): 
                    $route = route('tamu_submit')?> {{$route}}" method="POST">
                    @csrf
                    <label for="penerima" class="col-form-label col-md-2">Nama Tamu <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">
                        @if (!empty(@$tamu->id))
                        <input type="text" name="nama" id="nama" class="form-control m-b-5" value="{{$tamu->nama}}">

                        @else
                        <input type="text" name="nama" id="nama" class="form-control m-b-5">

                        @endif
                    </div>
                    <label for="penerima" class="col-form-label col-md-2">Instansi <span
                            class="text-danger">*</span></label>
                    <div class="col-md-7">
                        <select name="instansi" class="form-control m-b-5">

                            {{-- <?php foreach ($instansis as $instansi) {
                                // echo '<option value="'.$instansi->id.'">'.$instansi->nama_instansi.'</option>';
                            }?> --}}
                            {{-- @foreach ($instansis as $instansi)
                            <option value="{{$instansi->id}}">{{$instansi->nama_instansi}}</option>
                            @endforeach --}}
                            @foreach ($instansis as $instansi)
                            @if ($instansi->id == @$tamu->instansi->id)
                            <option value="{{$tamu->instansi->id}}" selected>{{$tamu->instansi->nama_instansi}}
                            </option>

                            @else
                            <option value="{{$instansi->id}}">{{$instansi->nama_instansi}}</option>

                            @endif
                            @endforeach
                        </select>
                    </div>
                    <p></p>
                    <?php $echo = '';?>
                    <?php (!empty($tamu->id)) ? 
                    $echo = 
                    '<button type="submit" class="btn btn-warning">
                        Ganti
                    </button>': 
                    $echo = '<button type="submit" class="btn btn-primary">
                        Absen
                    </button>'
                    ?>
                    <?php echo $echo?>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection