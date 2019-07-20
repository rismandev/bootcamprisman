<!-- Load Header -->
<?php require_once('header.php'); ?>

<!-- Button Tambah Biodata -->
<div class="row m-3">
    <div class="col text-right">
        <a href="tambah-biodata.php" class="btn btn-primary">Tambah Biodata</a>
    </div>
</div>

<!-- Content List Biodata -->
<div class="row m-3">
    <div class="col">
        <div class="table-responsive">
            <table class="table table-bordered">
                <!-- Table Header -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Full Name</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>No. Telp</th>
                        <th>Alamat</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Agama</th>
                        <th>Hobi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach (getBiodata() as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['full_name']; ?></td>
                            <td><?= $data['name']; ?></td>
                            <td><?= $data['date_of_birth']; ?></td>
                            <td><?= $data['phone_number']; ?></td>
                            <td><?= $data['address']; ?></td>
                            <td><?= $data['last_education']; ?></td>
                            <td><?= $data['religion']; ?></td>
                            <td><?= $data['hobby']; ?></td>
                            <td>
                                <a href="edit-biodata.php?id=<?= $data['id']; ?>" class="badge badge-primary">EDIT</a>
                                <a href="hapus-biodata.php?id=<?= $data['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus?');">DELETE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Load Footer -->
<?php require_once('header.php'); ?>