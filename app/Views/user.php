<h1>This is My User Controllers</h1>
<table>
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th>Jurusan</th>
        <th>Action</th>
    </tr>
    <?php foreach($mhs as $key=>$value):?>
    <tr>
        <td>1</td>
        <td><?= $value['npm']?></td>
        <td><?= $value['nama']?></td>
        <td><?= $value['jurusan']?></td>
        <td><a href="detail/<?= $value['npm']?>">Detail</a></td>
    </tr>
    <?php endforeach;?>
</table>
<style>
    table{
        width: 50%;
    }
    table, tr, th, td{
        border: 1px solid;
        border-color: pink;
    }
</style>