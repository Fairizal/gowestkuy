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
                        <!-- <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. KTP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ktpno" name="ktpno" placeholder="Isi No. KTP" value="<?= $dataSewa[0]->ktpno ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">No. HP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Isi No. HP Karyawan" disabled value="<?= $dataSewa[0]->nohp ?>">
                            </div>
                        </div> -->
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
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-vcenter" id="detail">
                                <thead>
                                    <tr>
                                        <th>Sepeda</th>
                                        <th>Harga</th>
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
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="pay" name="pay" placeholder="Total" value="<?= $dataSewa[0]->pay + $dataSewa[0]->overpay ?>" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label">Lebih Bayar</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="overpay" name="overpay" placeholder="Total" value="<?= $dataSewa[0]->overpay ?>" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
    window.print();
    </script>