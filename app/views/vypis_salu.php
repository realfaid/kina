<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h5>Výpis sálů</h5>
                    <a href="<?= base_url('pridat_sal') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered" id="filmy-list">
                    <thead>
                        <tr>
                            <th>ID sálu</th>
                            <th>Číslo sálu</th>
                            <th>Typ promítání</th>
                            <th>Typ ozvučení</th>


                        </tr>
                        </thead>
                        <tbody>
                            <?php if($saly): ?>

                                <?php foreach($saly as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['id_salu']; ?></td>
                                        <td><?php echo $row['cislo_salu']; ?></td>
                                        <td><?php echo $row['typ_promitani']; ?></td>
                                        <td><?php echo $row['typ_ozvuceni']; ?></td>

                                        <td>
                                            <a href="<?= base_url('upravaSalu/'.$row['id_salu'])?>" class="btn btn-primary btn-sm">Upravit</a>
                                            <a href="<?= base_url('smazatSal/'.$row['id_salu'])?>" class="btn btn-danger btn-sm">Smazat</a>
                                        </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
