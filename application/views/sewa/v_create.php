<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">
                    <?php echo $title ?>
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title"><?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. Transaksi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="trxno" name="trxno" placeholder="Isi No. Transaksi atau biarkan kosong">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-flatpickr-datetime-24" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="js-flatpickr form-control bg-white" id="tgl_sewa" name="tgl_sewa" data-enable-time="true" data-time_24hr="true" placeholder="Pilih tanggal">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lama Sewa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="duedays" name="duedays" placeholder="Isi lama sewa">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Pelanggan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pelanggan" name="pelanggan" placeholder="Isi nama pelanggan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. KTP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ktpno" name="ktpno" placeholder="Isi No. KTP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Isi No. HP Pelanggan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isi Alamat pelanggan">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-12">
                        <div class="form-group row col-lg-6">
                            <select class="js-select2 form-control" id="search" name="search" style="width: 50%;" data-placeholder="Cari Sepeda">
                                <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <?php
                                    foreach ($dataSepeda as $sepeda) {
                                ?>
                                    <option value="<?= $sepeda->id ?>" qty="<?= $sepeda->qty ?>"><?= $sepeda->namaSepeda . ' / ' . $sepeda->qty ?></option>

                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter" id="detail">
                                <thead>
                                    <tr>
                                        <th>Sepeda</th>
                                        <th>Harga</th>
                                        <th class="text-center" style="width: 10%;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="nullDataTable">
                                        <td class="font-w400" colspan="3">
                                            Tidak ada data
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-4" style="margin-left: 615px">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Total</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="total" name="total" placeholder="Total" value="0" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pay" name="pay" placeholder="Total" value="0">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lebih Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="overpay" name="overpay" placeholder="Total" value="0" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="<?= base_url('sewa')?>" class="btn btn-alt-light" id="back">Kembali</a>
                    <button onclick="$.fn.save()" class="btn btn-primary" id="save">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    var dataSepeda = <?= json_encode($dataSepeda) ?>;
    var dataDetail = [];

    $(document).ready(function() {
        $('#tgl_sewa').val("<?php echo date('Y-m-d')?>");
        $('#duedays').val("3");
    });

    $('#search').change(function(){
        var id = $(this).select2('val');
        if (id != "") {
            var checkNullColumn = $('#detail > tbody:last').find('tr');
            if (checkNullColumn) {
                $('#nullDataTable').remove();
            }
            var idx = 0; 
            // var rowCount = $('#detail tbody tr').length;
            // if(rowCount < 2) {
                idx = new Date().getTime();;
                var data = filter(dataSepeda, id);
                dataTemp = {
                    'idx': idx,
                    'sepeda_id': data.id,
                    'subtotal': data.harga
                }
                dataDetail.push(dataTemp);
                var sepedaId = '<input type="hidden" id="sepeda_id" name="sewad['+idx+'][sepeda_id]" value="'+data.id+'">';
                var subtotal = '<input type="hidden" id="subtotal" name="sewad['+idx+'][subtotal]" value="'+data.harga+'">';
                var namaColumn = '<td class="font-w600 font-size-sm" id="td_nama_'+idx+'">'+data.namaSepeda+'</td>';
                var hargaColumn = '<td class="font-w600 font-size-sm" id="td_harga_'+idx+'">'+data.harga+'</td>';
                var aksiColumn = '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-sm btn-alt-primary" data-toggle="tooltip" title="Delete" onclick="$.fn.deleteColumn('+idx+')"><i class="fa fa-fw fa-times"></i></button></div></td>';
                var rowTable = '<tr id="tr_'+idx+'">'+ sepedaId + subtotal + namaColumn + hargaColumn + aksiColumn +'</tr>';
                $('#detail > tbody:last').append(rowTable);
                var total = $('#total').val();
                $('#total').val(parseInt(total)+parseInt(data.harga));
                $('#overpay').val(parseInt($('#pay').val())-parseInt($('#total').val()));
            // } else {
            //     $('#toastTitle').text('Gagal');
            //     $('#toastText').text('Jumlah item yang disewa sudah 2');
            //     jQuery('#toast-example-1').toast('show'); 
            // }
            $('#search').val(null);
            $('#search').trigger('change');
        }
    });

    $('#pay').keyup(function(){
        $('#overpay').val(parseInt($(this).val() != '' ? $(this).val() : 0)-parseInt($('#total').val()));
    });

    $.fn.deleteColumn = function(id) {
        var total = $('#total').val();
        var harga = $('#td_harga_'+id).text();
        $('#total').val(parseInt(total)-parseInt(harga));
        $('#tr_'+id).remove();
        var rowCount = $('#detail tbody tr').length;
        if(rowCount < 1) {
            var nullData = '<tr id="nullDataTable"><td class="font-w400" colspan="3">Tidak ada data</td></tr>'
            $('#detail > tbody:last').append(nullData);
        }
        for (var i = 0 ; i < dataDetail.length; i++) {
            if(dataDetail[i].idx == id) {
                dataDetail.splice(i, 1);
            }
        }
        // console.log(dataDetail);
    }

    $.fn.save = function() {
        var trxno = $('#trxno').val();
        var tgl_sewa = $('#tgl_sewa').val();
        var duedays = $('#duedays').val();
        var pelanggan = $('#pelanggan').val();
        var ktpno = $('#ktpno').val();
        var nohp = $('#nohp').val();
        var alamat = $('#alamat').val();
        var total = $('#total').val();
        var pay = $('#pay').val();
        var overpay = $('#overpay').val();

        if (trxno == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi No.Transaksi');
            jQuery('#toast-example-1').toast('show');
        } else if (tgl_sewa == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi Tanggal Transaksi');
            jQuery('#toast-example-1').toast('show');
        } else if (duedays == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi Lama Penyewaan');
            jQuery('#toast-example-1').toast('show');
        } else if (pelanggan == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi Nama Pelanggan');
            jQuery('#toast-example-1').toast('show');
        } else if (ktpno == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi No.KTP');
            jQuery('#toast-example-1').toast('show');
        } else if (nohp == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi No.HP');
            jQuery('#toast-example-1').toast('show');
        } else if (alamat == '') {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Harap Mengisi Alamat');
            jQuery('#toast-example-1').toast('show');
        } else if (parseInt(total) > parseInt(pay)) {
            $('#toastTitle').text('Gagal');
            $('#toastText').text('Jumlah bayar tidak boleh kurang dari total');
            jQuery('#toast-example-1').toast('show');
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('sewa/create') ?>",
                data: { 
                    trxno: trxno, 
                    tgl_sewa: tgl_sewa,
                    duedays: duedays, 
                    pelanggan: pelanggan, 
                    ktpno : ktpno,
                    nohp: nohp, 
                    alamat: alamat, 
                    total: total,  
                    pay: pay, 
                    overpay: overpay,
                    detail : dataDetail,
                },
                dataType: 'json',
                // contentType: 'application/json',
                success: function(data) {
                    if(data.status == true) {
                        $('#toastTitle').text('Berhasil');
                        $('#toastText').text(data.msg);
                        jQuery('#toast-example-1').toast('show');
                        window.location.href = "<?= base_url('sewa/view/') ?>"+data.id;
                    } else {
                        $('#toastTitle').text('Gagal');
                        $('#toastText').text(data.msg);
                        jQuery('#toast-example-1').toast('show');
                    }
                }
            });  
        }
    }
</script>