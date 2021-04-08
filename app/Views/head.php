<!DOCTYPE html>
<html>
    <head>
        <title>Kina</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
                <nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #4a0555;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">Kino</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="container-fluid collapse navbar-collapse" id="navbar-responsive">
                
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Úvod <span class="sr-only">(current)</span> </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("auth/login")?>">Přihlášení </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("auth/create_user")?>">Registrace </a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("auth/logout")?>">odhlásit </a></li>
                </ul>
            </div>
        </nav>
    </body>
</html>