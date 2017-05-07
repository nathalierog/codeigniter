<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
            <h1><?= $note['name']; ?></h1>
            <hr>
        </div>
        <div class="row">
            <blockquote>
                <p><?= $note['note'] ?></p>
            </blockquote>
        </div>
        <div class="col-md-12">
            <div class="row">
                <a class="pull-right" href="<?= base_url('notes/edit/'.$note['id']); ?>">
                    <button class="btn btn-primary btn-sm">Bewerken</button>
                </a>
                <a style="margin-right:10px;" class="pull-right" href="<?= base_url('notes'); ?>">
                    <button class="btn btn-default btn-sm">Terug</button>
                </a>
            </div>
        </div>
    </div>
</div>
