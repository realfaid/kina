<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat sál
                        <a href="<?= base_url('vypis_salu') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatSal') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Číslo sálu</label>
                            <input type="number" name="cislo_salu"  class="form-control" placeholder="Napiš číslo sálu(číslo)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ promítání - 3D nebo 2D</label>
                            <input type="text" name="typ_promitani"  class="form-control" placeholder="Napiš typ promítání" required pattern="3[Dd]|2[Dd]">
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ ozvučení</label>
                            <input type="text" name="typ_ozvuceni"  class="form-control" placeholder="Napiš typ ozvučení" required>
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
                
