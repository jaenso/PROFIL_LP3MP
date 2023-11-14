<section class="informasi">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1>Sertifikat Akreditasi</h1>
                <table id="example" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program Studi</th>
                            <th>Strata</th>
                            <th>No. SK</th>
                            <th>Peringkat</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Link Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($dokumen as $dkm) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $dkm->p_studi ?></td>
                                <td><?= $dkm->strata ?></td>
                                <td><?= $dkm->no_sk ?></td>
                                <td><?= $dkm->peringkat ?></td>
                                <td><?= $dkm->tgl_kadaluarsa ?></td>
                                <td><a href="<?= $dkm->link ?>">Download</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>