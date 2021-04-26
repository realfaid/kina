<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit sál
                        <a href="<?= base_url('vypis_salu') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuSalu/'.$saly['id_salu']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Číslo sálu(číslo)</label>
                            <input type="text" name="cislo_salu" value="<?= $saly['cislo_salu'] ?>" class="form-control" placeholder="Napiš číslo sálu(číslo)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ promítání</label>
                            <input type="text" name="typ_promitani" value="<?= $saly['typ_promitani'] ?>" class="form-control" placeholder="Napiš typ promítání" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ ozvučení</label>
                            <input type="text" name="typ_ozvuceni" value="<?= $saly['typ_ozvuceni'] ?>" class="form-control" placeholder="Napiš typ ozvučení" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mt-2">Uložit</button>
                        </div>
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div></div>
                
