<?php $db = \Config\Database::connect(); 

?>

<?php
$query   = $db->query('SELECT id_filmu, nazev_cz, originalni_nazev, delka, zeme.nazev_zeme as zeme, zanry_filmu.nazev_zanru as zanr, promitani.datum_promitani as promitani FROM filmy inner join zeme on filmy.zeme_id_zeme = zeme.id_zeme inner join zanry_filmu on filmy.id_zanru_filmu = zanry_filmu.id_zanru inner join promitani on filmy.id_promitani = promitani.id_promitani');
$results = $query->getResultArray();
?>
    <body style="background-color: #feffd5;">
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

                            <th>Žánr filmu</th>
                            <th>Země</th>
                            <th>Datum promítání</th>
                        </tr>
                        </thead>
                        <tbody>


                                <?php foreach($results as $row) { ?>
                                    <?php $ids = $row['id_filmu']; ?>
                                    <tr>
                                        <td><?php echo $row['id_filmu']; ?></td>
                                        <td><?php echo $row['nazev_cz']; ?></td>
                                        <td><?php echo $row['originalni_nazev']; ?></td>
                                        <td><?php echo $row['delka']; ?></td>

                                        <td><?php echo $row['zanr']; ?></td>
                                        <td><?php echo $row['zeme']; ?></td>
                                        <td><?php echo $row['promitani']; ?></td>
                                        <td>
                                            <a href="<?= base_url('uprava/'.$row['id_filmu'])?>" class="btn btn-primary btn-sm">Upravit</a>
                                            <a href="<?= base_url('smazat/'.$row['id_filmu'])?>" class="btn btn-danger btn-sm">Smazat</a>
                                        </td>
                                        </tr>
                                        <?php  }?>

                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
