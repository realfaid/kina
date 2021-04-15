<div class="container mt-4">
    <div class="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h5>Výpis filmů</h5>
                     <a href="<?= base_url('pridat_film') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered" id="filmy-list">
                    <thead>
                        <tr>
                            <th>ID filmu</th>
                            <th>Český název</th>
                            <th>Originální název</th>
                            <th>Délka filmu(min)</th>
                            <th>Typ filmu</th>
                            <th>Žánr filmu</th>
                            <th>Země</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php if($filmy): ?>

                                <?php foreach($filmy as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['id_filmu']; ?></td>
                                        <td><?php echo $row['nazev_cz']; ?></td>
                                        <td><?php echo $row['originalni_nazev']; ?></td>
                                        <td><?php echo $row['delka']; ?></td>
                                        <td><?php echo $row['id_typu_filmu']; ?></td>
                                        <td><?php echo $row['id_zanru_filmu']; ?></td>
                                        <td><?php echo $row['id_zeme_id']; ?></td>
                                        <td>
                                            <a href="<?= base_url('uprava/'.$row['id_filmu'])?>" class="btn btn-primary btn-sm">Upravit</a>
                                            <a href="<?= base_url('smazat/'.$row['id_filmu'])?>" class="btn btn-danger btn-sm">Smazat</a>
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
