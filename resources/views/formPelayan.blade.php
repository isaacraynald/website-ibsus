@extends("layout.template")

@section("content")
<div class="section type-2">
    @if (session('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('message') }}
        </div>
    @endif
    <div class="content">
        <div class="card">
            <div class="header">
                <h2>Form Pelayan</h2>
            </div>
            <form method = "POST" action="/pelayan/proses/">
                @csrf
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <div class="form-line">
                                <input type="text"  name ="nama" class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="marga">Marga</label>
                            <div class="form-line">
                                <input type="text"  name ="marga" class="form-control"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <div class="demo-radio-button">
                        <input type="radio" name="gender" id="laki2" value = "laki-laki" checked />
                        <label for="laki2">Laki - laki</label>

                        <input type="radio" name="gender" id="perempuan" value = "perempuan"/>
                        <label for="perempuan">Perempuan</label>
                    </div>

                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="form-line">
                        <textarea rows="4" name ="alamat" class="form-control" placeholder="Tulis di sini"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="wijk">Wijk</label>
                    <div class="form-line">
                        <input type="text"  name ="wijk" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="noHp">No.HP</label>
                    <div class="form-line">
                        <input type="number"  name ="noHp" class="form-control"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control show-tick" name="status">
                        <option value="Belum Sidi">Belum Sidi</option>
                        <option value="Sudah Sidi">Sudah Sidi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="peminatan">Peminatan</label>
                    <div class="demo-checkbox">
                        <input type="checkbox" id="WL" name="peminatan[]" value="wl"/>
                        <label for="WL">WL</label>
                        <input type="checkbox" id="Pemusik" name="peminatan[]" value="pemusik"/>
                        <label for="Pemusik">Pemusik</label>
                        <input type="checkbox" id="Singer" name="peminatan[]" value="singer"/>
                        <label for="Singer">Singer</label>
                        <input type="checkbox" id="Operator Infocus" name="peminatan[]" value="multimedia"/>
                        <label for="Operator">Operator Infocus</label>
                        <input type="checkbox" id="Bulib" class="filled-in" name="peminatan[]" value="bulib"/>
                        <label for="Bulib">Bulib</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection