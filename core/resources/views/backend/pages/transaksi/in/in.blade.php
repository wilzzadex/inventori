@extends('backend.master')
@section('breadcumb')
    Barang Masuk (In)
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="margin-top: -50px">
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-4">
                            {{-- <label for="">Jenis Filter</label> <br>
                            <input type="radio" value="day" checked name="jenis"> Filter Tanggal &nbsp; <input type="radio" value="bulan" name="jenis"> Filter Bulan & Tahun<br>
                            <br>
                            <div style="display: " id="filter_day">
                                <label for="">Pilih Tanggal</label>
                                <div class="input-group input-group-solid date" id="tanggal" data-target-input="nearest">
                                    <input type="text" value="{{ date('m/d/Y') }}" class="form-control form-control-solid datetimepicker-input" placeholder="Select date & time" data-target="#tanggal"/>
                                    <div class="input-group-append" data-target="#tanggal" data-toggle="datetimepicker">
                                        <span class="input-group-text">
                                            <i class="ki ki-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div> --}}
                            <div style="display: " id="filter_bulan">
                                <div class="row">
                                    <div class="col-8">
                                        <label for="">Pilih Bulan</label>
                                        <div class="input-group input-group-solid date" id="tanggal" data-target-input="nearest">
                                            <select name="" id="" class="form-control">
                                                <option value="01" {{ date('m') == '01' ? 'selected' : '' }}>Januari</option>
                                                <option value="02" {{ date('m') == '02' ? 'selected' : '' }}>Februari</option>
                                                <option value="03" {{ date('m') == '03' ? 'selected' : '' }}>Maret</option>
                                                <option value="04" {{ date('m') == '04' ? 'selected' : '' }}>April</option>
                                                <option value="05" {{ date('m') == '05' ? 'selected' : '' }}>Mei</option>
                                                <option value="06" {{ date('m') == '06' ? 'selected' : '' }}>Juni</option>
                                                <option value="07" {{ date('m') == '07' ? 'selected' : '' }}>Juli</option>
                                                <option value="08" {{ date('m') == '08' ? 'selected' : '' }}>Agustus</option>
                                                <option value="09" {{ date('m') == '09' ? 'selected' : '' }}>September</option>
                                                <option value="10" {{ date('m') == '10' ? 'selected' : '' }}>Oktober</option>
                                                <option value="11" {{ date('m') == '11' ? 'selected' : '' }}>November</option>
                                                <option value="12" {{ date('m') == '12' ? 'selected' : '' }}>Desember</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Tahun</label>
                                        <select name="" class="form-control form-control-solid" id="">
                                            <option value="2020" {{ date('Y') == '2020' ? 'selected' : '' }}>2020</option>
                                            <option value="2021" {{ date('Y') == '2021' ? 'selected' : '' }}>2021</option>
                                            <option value="2022" {{ date('Y') == '2022' ? 'selected' : '' }}>2022</option>
                                            <option value="2023" {{ date('Y') == '2023' ? 'selected' : '' }}>2023</option>
                                            <option value="2014" {{ date('Y') == '2024' ? 'selected' : '' }}>2024</option>
                                            <option value="2025" {{ date('Y') == '2025' ? 'selected' : '' }}>2025</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                   <div class="card-title">
                        Data Barang Masuk Bulan
                       
                   </div>
                   
                    <div class="card-toolbar">
                        <a href="{{ route('in.add') }}" class="btn btn-primary font-weight-bolder">
                        <span class="svg-icon svg-icon-md">
                           <i class="fas fa-plus"></i>
                        </span>Tambah</a>
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    
                    <table class="table table-bordered" id="user_table">
                        <thead>
                            <tr>
                                <th width="10px">No.</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Reoder Jika barang kurang dari (Rolls)</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- @foreach ($barang as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->reorder }}</td>
                            <td nowrap="nowrap">
                                <div class="dropdown dropdown-inline mr-4">
                                    <button type="button" class="btn btn-light-primary btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="{{ route('barang.edit',$item->id) }}">Edit</a>
                                        <a class="dropdown-item" onclick="hapusBarang(this)" id="{{ $item->id }}" href="javascript:void(0)">Hapus</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach --}}
                        </tbody>
                    </table>
                    <!--end: Datatable-->
                </div>
            </div>
           
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
@endsection
@section('js-custom')
<script src="{{ asset('assets/backend') }} /plugins/custom/datatables/datatables.bundle.js"></script>

<script>
    $('#user_table').DataTable({
        responsive: true,
    })
    @if(session('success'))
        customAlert('Sukses !','{{ session("success") }}','success')
    @endif

    var arrows;
    if (KTUtil.isRTL()) {
    arrows = {
    leftArrow: '<i class="la la-angle-right"></i>',
    rightArrow: '<i class="la la-angle-left"></i>'
    }
    } else {
    arrows = {
    leftArrow: '<i class="la la-angle-left"></i>',
    rightArrow: '<i class="la la-angle-right"></i>'
    }
    }

    $('input:radio[name="jenis"]').change(
            function(){
                if ($(this).is(':checked') && $(this).val() == 'day') {
                    $('#filter_day').css('display','');
                    $('#filter_bulan').css('display','none');
                } else if($(this).is(':checked') && $(this).val() == 'bulan'){
                    $('#filter_day').css('display','none');
                    $('#filter_bulan').css('display','');
                }
    });

    $('#tanggal').datetimepicker({
        format: 'L'
    });

    function hapusBarang(obj){
        let id = $(obj).attr('id');
        Swal.fire({
            title: "Anda Yakin ?",
            text: "Data akan terhapus permanen",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Iya, Hapus saja!",
            cancelButtonText: "Tidak, Batalkan!",
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                $.ajax({
                    url : '{{ route("barang.destroy") }}',
                    type : 'get',
                    data : {
                        id : id,
                    },
                    beforeSend: function(){
                        KTApp.blockPage({
                            overlayColor: '#000000',
                            state: 'danger',
                            message: 'Silahkan Tunggu...'
                        });
                    },
                    success: function(res){
                        KTApp.unblockPage();
                        // console.log(res);
                        Swal.fire(
                            "Terhhapus!",
                            "Data berhasil di hapus.",
                            "success"
                        ).then(function(){
                            window.location.reload();
                        })
                    }
                })
                // Swal.fire(
                //     "Deleted!",
                //     "Your file has been deleted.",
                //     "success"
                // )
            }
        });
    }
</script>
@endsection