<!-- Load Header -->
<?php require_once('header.php'); ?>

<!-- Form Tambah -->
<form action="processinsert.php" method="post">
    <h4 class="text-center m-3">Tambah Biodata</h4>
    <div class="row m-3 mt-4">
        <!-- Desktop Bagian Kiri -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="full_name">Nama Lengkap</label>
                <input type="text" name="full_name" id="full_name" class="form-control" required>
            </div>
            <div class="form-group row">
                <div class="col-md-6 mb-3">
                    <label for="place_of_birth_id">Tempat Lahir</label>
                    <select name="place_of_birth_id" id="place_of_birth_id" class="form-control" required>
                        <option value="">Tempat Lahir</option>
                        <!-- Query Cities -->
                        <?php foreach (getCities() as $cities) : ?>
                            <option value="<?= $cities['cities_id']; ?>"><?= $cities['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="date_of_birth">Tanggal Lahir</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phone_number">No. HP</label>
                <input type="number" name="phone_number" id="phone_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <textarea name="address" id="address" class="form-control" rows="5"></textarea>
            </div>
        </div>
        <!-- Desktop Bagian Kanan -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_education">Pendidikan Terakhir</label>
                <select name="last_education" id="last_education" class="form-control" required>
                    <option value="">Pendidikan Terakhir</option>
                    <option value="S1">S1</option>
                    <option value="D3">D3</option>
                    <option value="SMK">SMK</option>
                    <option value="SMA">SMA</option>
                    <option value="SMP">SMP</option>
                </select>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="religion">Agama</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="religion" value="Islam" class="mr-2"> Islam
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="religion" value="Kristen" class="mr-2"> Kristen
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="religion" value="Katolik" class="mr-2"> Katolik
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="hobby">Hobi</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="hobby" value="mancing" class="mr-2"> Mancing
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="hobby" value="renang" class="mr-2"> Renang
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="hobby" value="game" class="mr-2"> Game
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="hobby" value="ghibah" class="mr-2"> Ghibah
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="hobby" value="programming" class="mr-2"> Programming
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-3">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

<!-- Load Footer -->
<?php require_once('footer.php'); ?>