<h1> <center> GoWest Kuy </center></h1>
<div class="content">
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title" style="display: inline-block;"><?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                <div class="row push">
                    <div class="col-lg-6 col-xl-6">
                        <input type="hidden" name="id" id="id" value="<?= $dataBack[0]->id ?>">
                        <input type="hidden" name="sewa_id" id="sewa_id" value="<?= $dataBack[0]->sewa_id ?>">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. Transaksi</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="trxno" name="trxno" placeholder="Isi No. Transaksi atau biarkan kosong" value="<?= $dataBack[0]->trxno ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-flatpickr-datetime-24" class="col-sm-4 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-8">
                                <input type="text" class="js-flatpickr form-control" id="tgl_kembali" name="tgl_kembali" data-enable-time="true" data-time_24hr="true" placeholder="Pilih tanggal" value="<?= $dataBack[0]->tgl_kembali ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lama Telat</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="backdays" name="backdays" placeholder="Isi lama telat" value="<?= $dataBack[0]->backdays ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter" id="detail">
                                <thead>
                                    <tr>
                                        <th>Sepeda</th>
                                        <th>Denda</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($dataBackd as $backd) {
                                    ?>
                                        <tr id="tr_<?= $backd->idx ?>">
                                            <input type="hidden" id="sepeda_id" name="backd[<?= $backd->idx ?>]['sepeda_id']" value="<?= $backd->sepeda_id ?>">
                                            <input type="hidden" id="subtotal" name="backd[<?= $backd->idx ?>]['subdenda']" value="<?= $backd->subdenda ?>">
                                            <td class="font-w600 font-size-sm" id="td_nama_<?= $backd->idx ?>">
                                                <?= $backd->namaSepeda ?>
                                            </td>
                                            <td class="font-w600 font-size-sm" id="td_harga_<?= $backd->idx ?>">
                                                <?= $backd->subdenda ?>
                                            </td>
                                        </tr>
                                    <?php
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
                                <input type="text" class="form-control" id="total" name="total" placeholder="Total" disabled value="<?= $dataBack[0]->total_denda ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pay" name="pay" placeholder="Total" value="<?= $dataBack[0]->pay ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lebih Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="overpay" name="overpay" placeholder="Total" value="<?= $dataBack[0]->overpay ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Basic -->
</div>
    <script>
    window.print();
    </script>