<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('studio/kelolainventaris'); ?>" class="btn btn-primary"><i class="material-icons">add_circle</i> Tambahkan Inventaris</a>
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashData('pesan'); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Inventaris Studio</h4>
                        <p class="card-category"> Daftar peralatan yang dimiliki oleh studio</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Nama Barang
                                    </th>
                                    <th>
                                        Jumlah
                                    </th>
                                    <th>
                                        Keterangan
                                    </th>
                                </thead>
                                <tbody>
                                    <?php foreach ($barang as $k) : ?>
                                        <tr>
                                            <td>
                                                <?= $k['id']; ?>
                                            </td>
                                            <td>
                                                <?= $k['barang']; ?>
                                            </td>
                                            <td>
                                                <?= $k['jumlah']; ?>
                                            </td>
                                            <td>
                                                <?= $k['keterangan']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>