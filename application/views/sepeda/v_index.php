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
    <!-- Dynamic Table Simple -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">Daftar <?php echo $title ?></h3>
        </div>
        <div class="block-content block-content-full">
            <a href="<?= base_url('sepeda/create')?>" class="btn btn-primary">Tambah</a>
            <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">No</th>
                        <th>Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Tipe</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">Merk</th>
                        <th style="width: 15%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $idx = 1;
                        foreach ($dataSepeda as $sepeda) {
                    ?>
                        <tr>
                            <td class="text-center font-size-sm"><?php echo $idx ?></td>
                            <td class="font-w600 font-size-sm"><?php echo $sepeda->namaSepeda ?></td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                <?php echo $sepeda->namaType ?>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <?php echo $sepeda->namaMerk ?>
                            </td>
                            <td>
                                <span><i class="far fa-eye"></i></span>
                                <span><i class="far fa-edit"></i></span>
                                <span><i class="far fa-trash-alt"></i></span>
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
    <!-- END Dynamic Table Simple -->
</div>
<!-- END Page Content -->