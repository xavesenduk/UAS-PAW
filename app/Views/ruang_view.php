<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo base_url('studio/kelolaruang'); ?>" class="btn btn-primary"><i class="material-icons">add_circle</i> Tambahkan Penggunaan Ruang</a>
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashData('pesan'); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Daftar Penggunaan Studio</h4>
                        <p class="card-category"> Ruangan perekaman dan fasilitas penunjang</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Tanggal
                                    </th>
                                    <th>
                                        Nama
                                    </th>
                                    <th>
                                        Tujuan
                                    </th>
                                    <th>
                                        PIC Studio
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                    <th>
                                        Aksi
                                    </th>
                                </thead>
                                <tbody>
                                    <?php foreach ($ruang as $k) : ?>
                                        <tr>
                                            <td>
                                                <?= $k['id']; ?>
                                            </td>
                                            <td>
                                                <?= $k['tanggalp']; ?>
                                            </td>
                                            <td>
                                                <?= $k['nama']; ?>
                                            </td>
                                            <td>
                                                <?= $k['tujuan']; ?>
                                            </td>
                                            <td>
                                                <?= $k['pic']; ?>
                                            </td>
                                            <td class="text-primary">
                                                <?= $k['status']; ?>
                                            </td>
                                            <td>
                                                <a href="/studio/kelolaruang/<?= $k['id']; ?>" class="btn btn-primary">Lihat</a>
                                                <a href="/kelola/ruangselesai/<?= $k['id']; ?>" class="btn btn-success <?php if ($k['status'] == 'Selesai') {
                                                                                                                            echo ' disabled';
                                                                                                                        } ?>">Selesai</a>
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