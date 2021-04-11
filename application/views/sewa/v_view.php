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
            <h3 class="block-title" style="display: inline-block;"><?php echo $title ?></h3>
            <a class="btn btn-danger" id="delete" onclick="$.fn.delete()">Hapus</a>
            <a href="<?= base_url('sewa/update/').$dataSewa[0]->id ?>" class="btn btn-success" id="update" style="margin-left: 10px">Ubah</a>
        </div>
        <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-6 col-xl-6">
                        <input type="hidden" name="id" id="id" value="<?= $dataSewa[0]->id ?>">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. Transaksi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="trxno" name="trxno" placeholder="Isi No. Transaksi atau biarkan kosong" disabled value="<?= $dataSewa[0]->trxno ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-flatpickr-datetime-24" class="col-sm-4 col-form-label">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="js-flatpickr form-control" id="tgl_sewa" name="tgl_sewa" data-enable-time="true" data-time_24hr="true" placeholder="Pilih tanggal" disabled style="cursor:auto" value="<?= $dataSewa[0]->tgl_sewa ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lama Sewa</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="duedays" name="duedays" placeholder="Isi lama sewa" disabled value="<?= $dataSewa[0]->duedays ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Pelanggan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pelanggan" name="pelanggan" placeholder="Isi nama pelanggan" disabled value="<?= $dataSewa[0]->pelanggan ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Isi No. HP Karyawan" disabled value="<?= $dataSewa[0]->nohp ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Isi Alamat Karyawan" disabled value="<?= $dataSewa[0]->alamat ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-12">
                        <div class="form-group row col-lg-6">
                            <select class="js-select2 form-control" id="search" name="search" style="width: 50%;" data-placeholder="Cari Sepeda" disabled>
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
                                    <?php
                                        $idx = 1;
                                        foreach ($dataSewad as $sewad) {
                                    ?>
                                        <tr id="tr_<?= $sewad->idx ?>">
                                            <input type="hidden" id="sepeda_id" name="sewad[<?= $sewad->idx ?>]['sepeda_id']" value="<?= $sewad->sepeda_id ?>">
                                            <input type="hidden" id="subtotal" name="sewad[<?= $sewad->idx ?>]['subtotal']" value="<?= $sewad->subtotal ?>">
                                            <td class="font-w600 font-size-sm" id="td_nama_<?= $sewad->idx ?>">
                                                <?= $sewad->namaSepeda ?>
                                            </td>
                                            <td class="font-w600 font-size-sm" id="td_harga_<?= $sewad->idx ?>">
                                                <?= $sewad->subtotal ?>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-alt-primary" data-toggle="tooltip" title="Delete" onclick="$.fn.delete(<?= $sewad->idx ?>)" disabled>
                                                        <i class="fa fa-fw fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php
                                        $idx++;
                                        }
                                    ?>
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
                                <input type="text" class="form-control" id="total" name="total" placeholder="Total" disabled value="<?= $dataSewa[0]->total ?>">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <a href="<?= base_url('karyawan')?>" class="btn btn-alt-light" id="back">Kembali</a>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    // var dataSepeda = <?php //echo json_encode($dataSepeda) ?>;
    // $('#search').change(function(){
    //     var id = $(this).select2('val');
    //     if (id != "") {
    //         var checkNullColumn = $('#detail > tbody:last').find('tr');
    //         if (checkNullColumn) {
    //             $('#nullDataTable').remove();
    //         }
    //         var idx = 0; 
    //         var rowCount = $('#detail tbody tr').length;
    //         if(rowCount < 2) {
    //             idx = new Date().getTime();;
    //             var data = filter(dataSepeda, id);
    //             var hiddenId = '<input type="hidden" value="'+data.id+'">';
    //             var namaColumn = '<td class="font-w600 font-size-sm" id="td_nama_'+idx+'">'+data.namaSepeda+'</td>';
    //             var hargaColumn = '<td class="font-w600 font-size-sm" id="td_harga_'+idx+'">'+data.harga+'</td>';
    //             var aksiColumn = '<td class="text-center"><div class="btn-group"><button type="button" class="btn btn-sm btn-alt-primary" data-toggle="tooltip" title="Delete" onclick="$.fn.delete('+idx+')"><i class="fa fa-fw fa-times"></i></button></div></td>';
    //             var rowTable = '<tr id="tr_'+idx+'">'+ hiddenId + namaColumn + hargaColumn + aksiColumn +'</tr>';
    //             $('#detail > tbody:last').append(rowTable);
    //             var total = $('#total').val();
    //             $('#total').val(parseInt(total)+parseInt(data.harga));
    //         } else {
    //             $('#toastTitle').text('Gagal');
    //             $('#toastText').text('Jumlah item yang disewa sudah 2');
    //             jQuery('#toast-example-1').toast('show'); 
    //         }
    //         $('#search').val(null);
    //         $('#search').trigger('change');
    //     }
    // });

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
    }

    $.fn.delete = function() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('sewa/delete/').$dataSewa[0]->id ?>",
            dataType: 'json',
            // contentType: 'application/json',
            success: function(data) {
                if(data.status == true) {
                    $('#toastTitle').text('Berhasil');
                    $('#toastText').text(data.msg);
                    window.location.href = "<?= base_url('sewa') ?>";
                    jQuery('#toast-example-1').toast('show');
                } else {
                    $('#toastTitle').text('Gagal');
                    $('#toastText').text(data.msg);
                    jQuery('#toast-example-1').toast('show');
                }
            }
        });
    }
</script>