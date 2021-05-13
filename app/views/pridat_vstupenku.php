<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Přidat sál
                        <a href="<?= base_url('vypis_vstupenek') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatVstupenku') ?>" method="POST">
                    <div class="form-group mb-2">
                            <label>Čas prodeje(čas)</label>
                            <input type="text" name="cas_prodeje"  class="form-control" placeholder="Napiš čas prodeje(11:30:30)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Cena vstupenky</label>
                            <input type="number" name="cena_vstupenky"  class="form-control" placeholder="Napiš cenu vstupenky" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Číslo sálu</label>
                            <input type="number" name="id_salu_id"  class="form-control" placeholder="Napiš číslo sálu" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Místo</label>
                            <input type="number" name="misto_v_sale"  class="form-control" placeholder="Napiš číslo místa v sále" required>
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
                
