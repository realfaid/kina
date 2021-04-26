<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class="card-header">
                    <h5>Výpis Vstupenek</h5>
                    <a href="<?= base_url('pridat_vstupenku') ?>" class="btn btn-info btn-sm float-end">Přidat</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered" id="filmy-list">
                    <thead>
                        <tr>
                            <th>ID vstupenky</th>
                            <th>Čas prodeje</th>
                            <th>Cena vstupenky</th>
                            <th>ID sálu</th>
                            <th>Místo v sále</th>


                        </tr>
                        </thead>
                        <tbody>
                            <?php if($prodeje): ?>

                                <?php foreach($prodeje as $row) : ?>
                                    <tr>
                                        <td><?php echo $row['id_prodeje']; ?></td>
                                        <td><?php echo $row['cas_prodeje']; ?></td>
                                        <td><?php echo $row['cena_vstupenky']; ?></td>
                                        <td><?php echo $row['id_salu_id']; ?></td>
                                        <td><?php echo $row['misto_v_sale']; ?></td>

                                        <td>
                                        <a href="<?= base_url('upravaVstupenky/'.$row['id_prodeje'])?>" class="btn btn-primary btn-sm">Upravit</a>
                                            <a href="<?= base_url('smazatVstupenku/'.$row['id_prodeje'])?>" class="btn btn-danger btn-sm">Smazat</a>
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
