<div class="content">
  <!-- Header -->
  <!-- Header -->
  <div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">PSIKOLOGI SYAMRABU</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Data Permintaan</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
              </ol>
            </nav>
          </div>
          
          <!-- <div class="col-lg-6 col-5 text-right">
            <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <!-- Dark table -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header bg-gradient-info">
            <div class="row">
              <div class="col-xl-4">
              </div>
              <!-- <div class="col-xl-4 ">
                <div class="card card-stats">
                  <div class="card-body">
                    <div class="row">
                      <div class="col lg-4">
                        <h5 class="card-title text-uppercase text-muted text-center mb-0">Total Permintaan</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="col-xl-4 ">
              </div>
            </div>
            <div class="pt-4 text-center">    
              <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Data Permintaan</h4>
              <div class="row">
                <div class="col-md-4">
                </div>
                  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                    <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                      <div class="modal-content">
                        <div class="modal-body p-0">
                          <div class="card bg-secondary border-0 mb-0">
                            <div class="card-header bg-success pb-1">
                              <div class="text-muted text-center mt-2 mb-3">
                                <span class="text-muted text-white">Form Tambah Diagnosa </span>
                              </div>
                            </div>
                            <div class="card-body px-lg-5 py-lg-5">
                            <form role="form">
                                <div class="form-group mb-3">
                                  <input id="idUser" type="hidden">
                                  <div class="form-group mb-3">
                                    <label class="form-control-label" for="atas_permintaan_ps">Atas Permintaan tertulis dari</label>
                                    <textarea class="form-control" id="atas_permintaan_ps" rows="3"></textarea>
                                  </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="nama_atas_permintaan_ps" id="nama_atas_permintaan_ps" placeholder="Nama Pejabat" type="text">
                                    </div>
                                </div>
                                  <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="jabatan_atas_permintaan_ps" id="jabatan_atas_permintaan_ps" placeholder="Jabatan" type="text">
                                    </div>
                                  </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-merge input-group-alternative">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-badge"></i></span>
                                      </div>
                                      <input class="form-control" name="no_surat_atas_permintaan_ps" id="no_surat_atas_permintaan_ps" placeholder="No Surat Permintaan" type="text">
                                    </div>
                                </div>
                                  <div class="col-12">
                                    <div class="form-group mb-3">
                                      <label class="form-control-label" for="perihal_atas_permintaan_ps">Perihal Permintaan</label>
                                      <textarea class="form-control" id="perihal_atas_permintaan_ps" rows="3"></textarea>
                                    </div>
                                  </div>
                                <div class="badge badge-danger" id="pesanErrorEdit"></div>
                                <div class="text-center">
                                  <button type="button" onClick="edit()" id="tombolEdit" class="btn btn-success my-2">Tambah</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                </div>
              </div>
            </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive py-4" id="tempatTabel">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalCetak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Cetak Data</span>
            <!-- <span class="fw-light">
              User
            </span> -->
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksCetak"></p>
          <input type="hidden" id="id_cetak" name="id_cetak" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="cetak" onClick="cetak()" class="btn btn-primary">Cetak</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header no-bd">
          <h5 class="modal-title">
            <span class="fw-mediumbold">
              Hapus Data Pasien</span>
            <span class="fw-light">
              User
            </span>
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p id="teksHapus"></p>
          <input type="hidden" id="id_hapus" name="id_hapus" />
        </div>
        <div class="modal-footer no-bd">
          <button type="button" id="hapus" onClick="hapus()" class="btn btn-primary">Hapus</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>
  // $(document).ready(function() {
  //   //  add_list();
  //   tampilkan();
  // }); 
  tampilkan();

  function tampilkan(){
    $("#tempatTabel").html('<i class="fas fa-spinner fa-pulse"></i> Memuat...')
    var baris = '<table class="table table-flush" id="tabelUser"><thead class="thead-light"><tr><th>Action</th><th>NO</th><th>Tanggal</th><th>Nama</th><th>Keperluan</th><th>Pendidikan Terakhir</th></tr></thead><tbody>'
      $.ajax({
        type:'POST',
        url: '<?= base_url() ?>operator_psikologi/tampil',
        dataType :'json',
        success: function(data){
          // console.log(data);
          for (let i = 0; i < data.length; i++) {
            baris += '<tr>'
            baris += '<td><div style="cursor:pointer;" title="hapus?" class="badge badge-danger" id="hapus' + data[i].id + '" onClick="tryHapus(' + data[i].id+ ')"><i class="fa fa-times"></i></div>'
            baris += ' <div style="cursor:pointer;" title="edit?" class="badge badge-info" id="edit' + data[i].id + '" onClick="tryEdit(' + data[i].id+ ')"><i class="fa fa-edit"></i></div>'
            baris += ' <div style="cursor:pointer;" title="Cetak?" class="badge badge-success" id="cetak' + data[i].id + '" onClick="tryCetak(' + data[i].id+ ')"><i class="fa fa-print"></i></div>'
            // baris += ' <div style="cursor:pointer;" title="Cetak?" class="badge badge-success" id="cetak' + data[i].id + '" onClick="send_form()"><i class="fa fa-print"></i></div>'
            baris += '<td>' + (i + 1) + '</td>'
            baris += '<td>' + data[i].tgl_daftar_gcu + '</td>'
            baris += '<td>' + data[i].nama + '</td>'
            baris += '<td>' + data[i].keperluan_pasien_gcu + '</td>'
            baris += '<td>' + data[i].pendidikan_pasien_gcu + '</td>'
            baris += '</td></tr>'
          }
          baris += '</tbody></table>'
          $("#tempatTabel").html(baris);
          $('#tabelUser').DataTable({
            "pageLength": 10,
          });
        }
      });
  }

  function tryEdit(id) {
    $("#tombolEdit" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $("#idUser").val(id)
    $.ajax({
      url: '<?= base_url() ?>operator_psikologi/edit_id',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#modalEdit").modal('show')
        $("#atas_permintaan_ps").val(data.atas_permintaan_ps)
        $("#nama_atas_permintaan_ps").val(data.nama_atas_permintaan_ps)
        $("#jabatan_atas_permintaan_ps").val(data.jabatan_atas_permintaan_ps)
        $("#perihal_atas_permintaan_ps").val(data.perihal_atas_permintaan_ps)
        $("#no_surat_atas_permintaan_ps").val(data.no_surat_atas_permintaan_ps)
        console.log(data)
        $("#edit" + id).html('<i class="fa fa-edit"></i>')
      }
    });
  }

  function edit() {
    $("#tombolEdit").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var atas_permintaan_ps = $("#atas_permintaan_ps").val()
    var nama_atas_permintaan_ps = $("#nama_atas_permintaan_ps").val()
    var jabatan_atas_permintaan_ps = $("#jabatan_atas_permintaan_ps").val()
    var no_surat_atas_permintaan_ps = $("#no_surat_atas_permintaan_ps").val()
    var perihal_atas_permintaan_ps = $("#perihal_atas_permintaan_ps").val()
    var id = $("#idUser").val()
    $.ajax({
      url: '<?= base_url() ?>operator_psikologi/edit',
      method: 'post',
      data: {
        id: id,
        atas_permintaan_ps: atas_permintaan_ps,
        nama_atas_permintaan_ps: nama_atas_permintaan_ps,
        jabatan_atas_permintaan_ps: jabatan_atas_permintaan_ps,
        no_surat_atas_permintaan_ps: no_surat_atas_permintaan_ps,
        perihal_atas_permintaan_ps: perihal_atas_permintaan_ps
      },
      dataType: 'json',
      success: function(data) {
        if (data == "") {
          $("#idUser").val("")
          $("#atas_permintaan_ps").val("")
          $("#nama_atas_permintaan_ps").val("")
          $("#jabatan_atas_permintaan_ps").val("")
          $("#no_surat_atas_permintaan_ps").val("")
          $("#perihal_atas_permintaan_ps").val("")
        } else {
          $('#pesanErrorEdit').html(data)
        }
        $("#modalEdit").modal('hide');
        tampilkan();
        $("#tombolEdit").html('Edit')
      }
    });
  }



  function tryCetak(id) {
    window.open(
       "<?= site_url(); ?>operator_psikologi/dataById/" + id);
  }



  function tryHapus(id) {
    $("#hapus" + id).html('<i class="fas fa-spinner fa-pulse"></i>')
    $.ajax({
      url: 'operator_psikologi/edit_id',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val(id)
        $("#teksHapus").html("apakah anda yakin ingin menghapus data dengan nama '" + data.nama + "' ?")

        $("#hapus" + id).html('<i class="fa fa-times"></i>')
      }
    });
    $("#modalHapus").modal('show')
  }

  function hapus() {
    $("#hapus").html('<i class="fas fa-spinner fa-pulse"></i> Memproses..')
    var id = $("#id_hapus").val()
    $.ajax({
      url: 'operator_psikologi/hapus',
      method: 'post',
      data: "target=gcu_syamrabu&id=" + id,
      dataType: 'json',
      success: function(data) {
        $("#id_hapus").val("")
        $("#teksHapus").html("")
        tampilkan()
        $("#modalHapus").modal('hide')
        $("#hapus").html('Hapus')
      }
    });
  }
</script>