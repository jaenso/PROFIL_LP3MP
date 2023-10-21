<h2>Berita Berdasarkan Tanggal</h2>
<?php if (!empty($berita)) : ?>
    <ul>
        <?php foreach ($berita as $item) : ?>
            <li>
                <strong><?= $item->judul; ?></strong><br>
                <?= $item->isi; ?><br>
                Tanggal Publikasi: <?= $item->tanggal_publikasi; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>Tidak ada berita yang sesuai dengan tanggal filter.</p>
<?php endif; ?>