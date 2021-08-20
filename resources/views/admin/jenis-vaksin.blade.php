@extends('layouts.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb" class="d-none d-lg-block">
                <ol class="breadcrumb breadcrumb-style2 mg-b-10">
                  <li class="breadcrumb-item"><a href="../dashboard">Beranda</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Jenis Vaksin</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-montserrat tx-medium text-truncate">
                Jenis Vaksin
              </h4>
            </div>
            <div class="d-lg-none mg-t-10">
            </div>
            <div>
              <a href="#tambahjenisvaksin" data-toggle="modal" data-animation="effect-scale" class="btn btn-its tx-montserrat tx-semibold"><i data-feather="plus" class="wd-10 mg-r-5 tx-color-its2"></i> Tambah</a>
            </div>
          </div>

          <div class="row row-xs">
            <div class="col-sm-12 col-lg-12">
              <div class="card">
                <div class="card-body pd-0 table-responsive">
                  <table id="example1" class="table table-borderless mg-0">
                    <thead>
                      <tr class="tx-10 tx-spacing-1 tx-color-03 tx-uppercase">
                        <th class="wd-80p th-its" style="border-bottom: none !important"><span class="mg-r-15">Nama</span></th>
                        <th class="wd-20p th-its" style="border-bottom: none !important"><span class="mg-r-15">Aksi</span></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="td-its align-middle border-bottom">Coronavac</td>
                        <td class="td-its align-middle border-bottom"><a href="#" class="btn btn-white btn-icon" role="button" data-toggle="modal" data-target="#hapusjenisvaksin" data-animation="effect-scale"><i data-feather="trash" class="wd-10"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div><!-- row -->
          <div class="modal fade effect-scale" id="tambahjenisvaksin" tabindex="-1" role="dialog" aria-labelledby="modalmyfile" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="tx-montserrat tx-medium" id="tambahjenisvaksinLabel">Tambah Jenis Vaksin</h5>
          </div>
          <form>
            <div class="modal-body pd-t-0">
              <div class="form-group">
                <label class="d-block tx-10 tx-spacing-1 tx-color-03 tx-uppercase tx-semibold">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</button>
              <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="modal fade effect-scale" id="hapusjenisvaksin" tabindex="-1" role="dialog" aria-labelledby="hapusjenisvaksin" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tx-14 bg-white">
          <div class="modal-body">
            <h5 class="tx-montserrat tx-medium">Apakah Anda yakin ingin menghapus jenis vaksin ini?</h5>
            <span>Tindakan ini tidak dapat dibatalkan.</span>
          </div>
          <div class="modal-footer bd-t-0">
            <form>
              <a href="#" data-toggle="modal" data-animation="effect-scale" class="btn btn-white tx-montserrat tx-semibold" data-dismiss="modal">Batalkan</a>
              <button type="submit" class="btn btn-its tx-montserrat tx-semibold mg-l-5">Hapus</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection
