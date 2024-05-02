<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Edit Data Supplier</div>
                    <div class="col-4">
                        <a href="?m=suppliern&s=view" class="btn btn-lg btn-secondary float-end ">Kembali</a>
                    </div>
                </div>
                    <?php 
                    include_once ('db/config.php');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM supplier WHERE id='$id'";
                    $result =mysqli_query($koneksi, $sql);
                    $r =mysqli_fetch_assoc($result);
                    ?>
                <div class="card-body">
                    <form action="?m=supplier&s=update" method="post">
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" value="<?=$r['nama'];?>" placeholder="jurusan" required > 
                    </div>
                    <div class="mb-3">
                        <input type="text" name="hp" class="form-control" value="<?=$r['hp'];?>" placeholder="jurusan" required > 
                    </div>
                    <div class="mb-3">
                        <input type="text" name="email" class="form-control" value="<?=$r['email'];?>" placeholder="jurusan" required > 
                    </div>
                    <div class="mb-3">
                       <textarea name="alamat"  cols="70" rows="5" value="<?=$r['alamat'];?>" placeholder="alamat" required>
                </textarea>
                    </div>
                    <div class="mb-3">
                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $r['id'];?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="update" class="btn btn-primary" name="update">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('footer.php'); ?>  