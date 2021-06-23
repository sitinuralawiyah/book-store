<?php
include "config/koneksi.php";
include "library/controller.php";

$go = new controller;
$tabel = "login";
@$password = base64_encode($_POST['pass']);//enkripsi pake metode base64
@$field = array('username'=>$_POST['user'], 'password'=>$password);
$redirect = "?menu=user";
@$where = "id =  $_GET[id]";    
    
if(isset($_POST['simpan'])){
     $go->simpan($con, $tabel, $field, $redirect);
}

if(isset($_GET['hapus'])){
    $go->hapus($con, $tabel, $where, $redirect);
} 

if(isset($_GET['edit'])){
    $edit = $go->edit($con, $tabel, $where);
}

if(isset($_POST['ubah'])){
    $go->ubah($con, $tabel, $field, $where, $redirect);
}    
    
?>

<form method="post">
    <div class="mb-3 col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" name="user" value="<?php echo @$edit['username'] ?>"required>
    </div>
    <div class="mb-3 col-sm-8">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" value="<?php echo base64_decode(@$edit['password']) ?>" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
    <input type="submit" name="ubah" value="UBAH" class="btn btn-danger">
</form>

<table align="center" border="1" class="table table-bordered mt-4">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th colspan="2">Aksi</th>
    </tr>
    <?php 
        $data = $go->tampil($con, $tabel);
        $no = 0;
        if($data ==""){
            echo "<tr><td colspan='5'>No Record</td></tr>";
        }else{
            foreach($data as $r){
                $no++
    ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $r['username']; ?></td>
        <td><?php echo $r['password']; ?></td>
        <td><a href="?menu=user&hapus&id=<?php echo $r['id'] ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a></td>
        <td><a href="?menu=user&edit&id=<?php echo $r['id'] ?>" class="btn btn-warning">Edit</a></td>
    </tr>
    <?php } } ?>
</table>