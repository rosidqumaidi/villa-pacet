@extends('template.app')

@section('style')

@endsection

@section('content')
<div class="product-status mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>Data Villa</h4>
                    <div class="add-product">
                        <a href="#">Tambah Data</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Villa</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php
                                    $i= 1;
                                @endphp
                                @foreach ($villa as $item)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $item['nama_villa'] }}</td>
                                    <td>{{ $item['alamat_villa'] }}</td>
                                    <td>
                                        <input data-id="{{ $item['id'] }}" id="is_active" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Ada" data-off="Tidak Ada" {{ $item['status'] ? 'checked' : '' }}>
                                    </td>
                                    <td>
                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        <button data-toggle="tooltip" title="Hapus" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
@endsection

@section('script')
<script>
    $(function() {
        $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var villa_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/ubah-status',
                data: {'status': status, 'villa_id': villa_id},
                success: function(data){
                console.log(data.success)
                }
            });
        })
    })
</script>
@endsection


