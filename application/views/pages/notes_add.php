<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <h1>Add a note</h1>
            <hr>
        </div>
        <div class="row">
            <?php if(isset($_SESSION['error'])): ?>
                <div class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Foutmelding:</strong> <?= $_SESSION['error'] ?>
                </div>
            <?php endif; ?>
            <div class="well bs-component">
                <form action="<?php base_url('notes/add') ?>" method="post" class="form-horizontal" id="add_note">
                    <fieldset>
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">Naam:</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Naam">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-lg-2 control-label">Omschrijving:</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-sm btn-success pull-right">Toevoegen</button>
                                <a style="margin-right:10px;" class="pull-right" href="<?= base_url('notes'); ?>">
                                    <button type="button" class="btn btn-sm btn-default">Terug</button>
                                </a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
