<?php
include __DIR__ . '/../partials/header.php';

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="server.php" method="POST">
                <div class="form-group">
                    <label for="room_number">Numero Stanza</label>
                    <input class="form-control" type="text" name="room_number" placeholder="Inserisci il numero della Stanza">
                </div>
                <div class="form-group">
                    <label for="floor">Piano</label>
                    <input class="form-control" type="text" name="floor" placeholder="Inserisci il numero del piano" value="">
                </div>
                <div class="form-group">
                    <label for="beds">Numero letti</label>
                    <input class="form-control" type="text" name="beds" placeholder="Inserisci il numero di letti" value="">
                </div>
                <div class="form-group">
                    <input class="form-control" class="btn btn-submit" type="submit" value="Salva">
                </div>
            </form>
        </div>
    </div>
</div>