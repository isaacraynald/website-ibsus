@extends('admin.index')

@section('title')
    Tambah Pelayan
@endsection

@section('extra-css')

@endsection

@section('content')
    <div class="container-fluid">
        <div class="block-header">
            <h2>Pelayan</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Worship Leader</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped js-basic-example dataTable" id="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Marga</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Wijk</th>
                                    <th>No.Hp</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1;?>
                                @foreach($listPelayan as $pelayan)
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$pelayan->nama}}</td>
                                        <td>{{$pelayan->marga}}</td>
                                        <td>{{$pelayan->jenis_kelamin}}</td>
                                        <td>{{$pelayan->alamat}}</td>
                                        <td>{{$pelayan->wijk}}</td>
                                        <td>{{$pelayan->hp}}</td>
                                        <td>{{$pelayan->status}}</td>
                                    </tr>
                                    <?php $i++;?>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection

@section('extra-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable({
                "bLengthChange": false
            });
        } );
    </script>

@endsection