<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Tambah Data Supplier</div>
                    <div class="col-4">
                        <a href="?m=supplier&s=view" class="btn btn-lg btn-secondary float-end ">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="?m=supplier&s=save" method="post">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="nama supplier" required autofocus autocomplete="on">
                    </div>
                    <div class="mb-3">
                        <input type="number" name="hp" class="form-control" placeholder="No Hp" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Alamat email" required>

                    </div>
                    <div class="mb-3">
                       <textarea name="alamat"  cols="50" rows="5" placeholder="alamat"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="simpan" class="btn btn-primary " name="simpan" >
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?> 