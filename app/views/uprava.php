
<?php $db = \Config\Database::connect(); ?>
<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit film
                        <a href="<?= base_url('vypis_filmu') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravu/'.$filmy['id_filmu']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Český název</label>
                            <input type="text" name="nazev_cz" value="<?= $filmy['nazev_cz'] ?>" class="form-control" placeholder="Napiš český název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Originální název</label>
                            <input type="text" name="originalni_nazev" value="<?= $filmy['originalni_nazev'] ?>" class="form-control" placeholder="Napiš originální název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Délka filmu(číslo)</label>
                            <input type="text" name="delka" value="<?= $filmy['delka'] ?>" class="form-control" placeholder="Napiš délku filmu" required>
                        </div>
                        <label>Žánr filmu</label>
                        <select class="form-control" name="id_zanru_filmu" id="id_zanru_filmu">
                        <?php
                        $query = $db->query("SELECT * FROM zanry_filmu");
                        foreach ($query->getResult() as $row)
                        { ?> 
                        <option value=<?php echo $row->id_zanru?>> <?php echo $row->nazev_zanru;}?></option>
                        </select>
                        <label>Země</label>
                        <select class="form-control" name="zeme_id_zeme" id="zeme_id_zeme">
                        <?php
                        $query = $db->query("SELECT * FROM zeme");
                        foreach ($query->getResult() as $row)
                        { ?> 
                        <option value=<?php echo $row->id_zeme?>> <?php echo $row->nazev_zeme;}?></option>
                        </select>

                        <label>Datum promítání</label>
                        <select class="form-control" name="id_promitani" id="id_promitani">
                        <?php
                        $query = $db->query("SELECT * FROM promitani");
                        foreach ($query->getResult() as $row)
                        { ?> 
                        <option value=<?php echo $row->id_promitani?>> <?php echo $row->datum_promitani;}?></option>
                        </select>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
