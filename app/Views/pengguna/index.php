<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<h1>Content Pengguna</h1>
<div class="card">
    <div class="card-header">
        <h4>Daftar Pengguna</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>User</th>
            </tr>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
