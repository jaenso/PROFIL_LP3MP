<section class="informasi">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-10">
                <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <i class="bx bxs-home"></i><a href="<?= base_url(); ?>pengunjung">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?= $title ?>
                        </li>
                    </ol>
                </nav>
                <h1>Sertifikat Akreditasi</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container">
                        <div class="row">
                            <style>
                                #fakultas:hover {
                                    background-color: #f5f5f5;
                                }

                                #fakultas {
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    width: 60%;
                                    padding: 10px;
                                }

                                #fakultas:focus {
                                    outline: none;
                                    box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
                                }

                                .btn-success {
                                    background-color: #28a745;
                                    color: #fff;
                                    border: none;
                                    border-radius: 5px;
                                    padding: 10px 20px;
                                }

                                .table th {
                                    font-size: 14px;
                                }

                                .table td,
                                a {
                                    font-size: 14px;
                                }
                            </style>
                            <div class="col-6 mb-4">
                                <form action="<?= site_url('pengunjung/filter'); ?>" method="post">
                                    <label for="fakultas">Fakultas:</label>
                                    <select name="fakultas" id="fakultas">
                                        <option value="">Semua</option>
                                        <option value="FAPERTA">Fakultas Pertanian</option>
                                        <option value="FEB">Fakultas Ekonomi Bisnis</option>
                                    </select>
                                    <button type="submit" class="ms-3 btn btn-success">Filter</button>
                                </form>
                            </div>
                        </div>

                        <table class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Program Studi</th>
                                    <th>Strata</th>
                                    <th>Fakultas</th>
                                    <th>No. SK</th>
                                    <th>Peringkat</th>
                                    <th>Tanggal Kadaluarsa</th>
                                    <th>Status Kadaluarsa</th>
                                    <th>Keterangan</th>
                                    <th>Link Download</th>
                                </tr>
                            </thead>
                            <?php
                            foreach ($dokumen as $dkm) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $dkm->p_studi ?></td>
                                        <td><?= $dkm->strata ?></td>
                                        <td><?= $dkm->fakultas ?></td>
                                        <td><?= $dkm->no_sk ?></td>
                                        <td><?= $dkm->peringkat ?></td>
                                        <td><?= $dkm->tgl_kadaluarsa ?></td>
                                        <td><?= $dkm->status ?></td>
                                        <td><?= $dkm->keterangan ?></td>
                                        <td><a href="<?= $dkm->link ?>">Download</a></td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                        <?= $this->pagination->create_links(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>