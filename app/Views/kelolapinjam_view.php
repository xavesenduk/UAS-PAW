<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <?php if (session()->getFlashData('pesan')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashData('pesan'); ?> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Peminjaman Barang</h4>
                        <p class="card-category">Form untuk mengelola peminjaman peralatan</p>
                    </div>
                    <div class="card-body">
                        <form action="/kelola/pinjambaru" method="POST">
                            <?php
                            if ($idref != '') {
                                $condition = 'disabled';
                                $condition2 = 'hidden';
                                $id = $pinjam['id'];
                                $nama = $pinjam['nama'];
                                $nimnip = $pinjam['nimnip'];
                                $bdj = $pinjam['barangdanjumlah'];
                                $kontak = $pinjam['kontak'];
                                $tujuan = $pinjam['tujuan'];
                                $tanggalm = $pinjam['tanggalm'];
                                $tanggals = $pinjam['tanggals'];
                                $waktum = $pinjam['waktum'];
                                $waktus = $pinjam['waktus'];
                            } else {
                                $condition = '';
                                $condition2 = '';
                                $id = '';
                                $nama = '';
                                $nimnip = '';
                                $bdj = '';
                                $kontak = '';
                                $tujuan = '';
                                $tanggalm = '';
                                $tanggals = '';
                                $waktum = '';
                                $waktus = '';
                            } ?>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID (Otomatis)</label>
                                        <input type="text" class="form-control" value="<?php echo $id ?>" disabled>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" value="<?php echo $nama ?>" <?php echo $condition ?> autofocus>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">NIM / NIP</label>
                                        <input type="text" class="form-control" name="nimnip" value="<?php echo $nimnip ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang + Jumlah</label>
                                        <input type="text" class="form-control" name="barangdanjumlah" value="<?php echo $bdj ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kontak (WA/Telegram)</label>
                                        <input type="text" class="form-control" name="kontak" value="<?php echo $kontak ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tujuan Peminjaman</label>
                                        <input type="text" class="form-control" name="tujuan" value="<?php echo $tujuan ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Tanggal Pinjam</p>
                                        <input type="date" class="form-control" name="tanggalm" value="<?php echo $tanggalm ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Tanggal Pengembalian (Rencana)</p>
                                        <input type="date" class="form-control" name="tanggals" value="<?php echo $tanggals ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Waktu Pinjam</p>
                                        <input type="time" class="form-control" name="waktum" value="<?php echo $waktum ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p>Waktu Pengembalian (Rencana)</p>
                                        <input type="time" class="form-control" name="waktus" value="<?php echo $waktus ?>" <?php echo $condition ?>>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" <?php echo $condition2 ?>>Kirim Formulir</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>