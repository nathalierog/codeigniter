<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="row">
            <h1>Notes</h1>
            <hr>
        </div>
        <div class="row">
            <?php if(isset($_SESSION['success'])): ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Gelukt:</strong> <?= $_SESSION['success'] ?>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('notes/add'); ?>" class="pull-right">
                <button class="btn btn-primary btn-sm">Toevoegen</button>
            </a>
        </div>
        <div class="row">
            <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Naam</th>
                        <th>Omschrijving</th>
                        <th>Aangemaakt op</th>
                        <th>Acties</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($notes as $key => $note): ?>
                        <tr>
                            <td><?= $note['id']; ?></td>
                            <td><?= $note['name']; ?></td>
                            <td><?= $note['note']; ?></td>
                            <td><?= $note['created_at']; ?></td>
                            <td>
                                <a href="<?=base_url('notes/view/'.$note['id']);?>"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                <a href="<?=base_url('notes/edit/'.$note['id']);?>"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                <button data-id="<?= $note['id']; ?>" class="btn btn-danger btn-sm delete-button"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="<?= base_url('application/assets/js/pages/notes.js'); ?>" defer="defer" type="text/javascript"></script>
