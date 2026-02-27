<div class="card mb-4">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <td width="150"><strong>Nama</strong></td>
                <td width="1">:</td>
                <td width="200"><?=  $_SESSION['user']['username']; ?></td>
            </tr>
            <tr>
                <td width="150"><strong>Level User</strong></td>
                <td width="1">:</td>
                <td width="200"><?=  $_SESSION['user']['level']; ?></td>
            </tr>
            <tr>
                <td width="150"><strong>Tanggal</strong></td>
                <td width="1">:</td>
                <td><?= date('d-m-y'); ?></td>
            </tr>
        </table>
    </div>
</div>

 
            
       