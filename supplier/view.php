<?php include_once('header.php'); ?>

<div class="container mt-2 mb-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Data Supplier</div>
                    <div class="col-4">
                        <a href="?m=supplier&s=add" class="btn btn-lg btn-primary float-end ">Tambah</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Alamat</th>
                                <th>No hp</th>
                                <th>email</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include_once('db/config.php');
                            $sql = "SELECT * FROM supplier";
                            $result = mysqli_query($koneksi, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($result)) {
                                    echo '<tr>
                                                <td>' . $no . '</td>
                                                <td>' . $r['nama'] . '</td>
                                                <td>' . $r['alamat'] . '</td>
                                                <td>' . $r['hp'] . '</td>
                                                <td>' . $r['email'] . '</td>
                                                <td>
                                                <a href="?m=supplier&s=edit&id=' . $r['id'] . '"class="btn btn-warning btn-sm">Edit</a>
                                                <a href="?m=supplier&s=delete&id=' . $r['id'] . '"class="btn btn-danger btn-sm" onclick="return confirm (\' Yakin akan dihapus?, Hapus 1 supplier akan menghapus semua data  yang ada pada supplier tersebut.\' )">Hapus</a>
                                                </td>
                                                </tr>';
                                    $no++;
                                }
                            } else {
                                echo "<tr> 
                              <td colspan=6 align='center'> data kosong </td>
                              </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>