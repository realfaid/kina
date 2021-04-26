<body style="background-color: #feffd5;">
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Upravit vstupenku
                        <a href="<?= base_url('vypis_vstupenek') ?>" class="btn btn-danger btn-sm float-end">Zpět</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('zapsatUpravuVstupenky/'.$prodeje['id_prodeje']) ?>" method="POST">
                    <input type="hidden" name="_method" value="PUT" />
                        <div class="form-group mb-2">
                            <label>Čas prodeje(čas)</label>
                            <input type="text" name="cas_prodeje" value="<?= $prodeje['cas_prodeje'] ?>" class="form-control" placeholder="Napiš čas prodeje(čas)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Cena vstupenky(číslo)</label>
                            <input type="text" name="cena_vstupenky" value="<?= $prodeje['cena_vstupenky'] ?>" class="form-control" placeholder="Napiš cenu vstupenky(číslo)" required>
                        </div>

                        <div class="form-group mb-2">
                            <label>Číslo sálu(číslo)</label>
                            <input type="text" name="id_salu_id" value="<?= $prodeje['id_salu_id'] ?>" class="form-control" placeholder="Napiš číslo sálu(číslo)" required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Místo(číslo)</label>
                            <input type="text" name="misto_v_sale" value="<?= $prodeje['misto_v_sale'] ?>" class="form-control" placeholder="Napiš místo v sále(číslo)" required>
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
                
