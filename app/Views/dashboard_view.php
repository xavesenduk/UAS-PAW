<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">arrow_circle_up</i>
                        </div>
                        <p class="card-category">Sedang Dipinjam</p>
                        <h3 class="card-title">
                            <?php
                            $i = 0;
                            if ($pinjam != null) {
                                foreach ($pinjam as $k) {
                                    $i++;
                                }
                            }
                            echo $i;
                            ?>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Peralatan studio
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">videocam</i>
                        </div>
                        <p class="card-category">Inventaris</p>
                        <h3 class="card-title">
                            <?php
                            $i = 0;
                            if ($barang != null) {
                                foreach ($barang as $k) {
                                    $i++;
                                }
                            }
                            echo $i;
                            ?>
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">local_offer</i> Peralatan studio
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">person</i>
                        </div>
                        <p class="card-category">Pengurus Studio</p>
                        <h3 class="card-title">4</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">person</i> KaLab, KoorLab, dan Admin
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Sedang Dipinjam</h4>
                        <p class="card-category">Peralatan kamera, lighting, dan set fotografi</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID</th>
                                <th>Nama Barang</th>
                                <th>Tanggal</th>
                                <th>Peminjam</th>
                            </thead>
                            <tbody>
                                <?php if ($pinjam != null) : ?>
                                    <?php foreach ($pinjam as $k) : ?>
                                        <tr>
                                            <td>
                                                <?= $k['id']; ?>
                                            </td>
                                            <td>
                                                <?= $k['barangdanjumlah']; ?>
                                            </td>
                                            <td>
                                                <?= $k['tanggalm']; ?>
                                            </td>
                                            <td>
                                                <?= $k['nama']; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <td>
                                        <p>
                                            Tidak ada yang sedang meminjam
                                        </p>
                                    </td>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Sedang Menggunakan</h4>
                        <p class="card-category">Ruangan dan fasilitas studio</p>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tujuan</th>
                                <th>PIC Studio</th>
                            </thead>
                            <tbody>
                                <?php if ($ruang != null) : ?>
                                    <?php foreach ($ruang as $k) : ?>
                                        <tr>
                                            <td>
                                                <?= $k['id']; ?>
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
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <td>
                                        <p>
                                            Tidak ada yang sedang menggunakan
                                        </p>
                                    </td>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>