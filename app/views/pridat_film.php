<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat film
                        <a href="<?= base_url('vypis_filmu') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsat') ?>" method="POST">
                        <div class="form-group mb-2">
                            <label>Český název</label>
                            <input type="text" name="nazev_cz" class="form-control" placeholder="Napiš český název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Originální název</label>
                            <input type="text" name="originalni_nazev" class="form-control" placeholder="Napiš originální název" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Délka filmu(číslo)</label>
                            <input type="text" name="delka" class="form-control" placeholder="Napiš délku filmu(číslo)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Typ filmu(číslo)</label>
                            <input type="text" name="id_typu_filmu" class="form-control" placeholder="Napiš typ filmu(číslo)" >
                        </div>
                        <div class="form-group mb-2">
                            <label>Žánr filmu(číslo)</label>
                            <input type="text" name="id_zanru_filmu" class="form-control" placeholder="Napiš žánr fimu(číslo)" >
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
                
