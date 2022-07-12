<?= Form::open(['id' => 'projectForm']) ?>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="popup">&times;</button>
        <h4 class="modal-title"><?= e(trans('system::lang.install.project_label')) ?></h4>
    </div>
    <div class="modal-body">

        <?php if ($this->fatalError): ?>
            <p class="flash-message static error"><?= e($fatalError) ?></p>
        <?php endif ?>

        <div class="form-group">
            <span class="help-block pull-right">
                <a target="_blank" href="http://wintercms.com/help/site/projects#project-id"><?= e(trans('system::lang.project.id.help')) ?></a>
            </span>
            <label for="projectId"><?= e(trans('system::lang.project.id.label')) ?></label>
            <input
                name="project_id"
                type="text"
                class="form-control"
                id="projectId"
                value="<?= e(post('project_id')) ?>"
                autocomplete="off" />
        </div>

    </div>

    <div class="modal-footer">
        <button
            type="submit"
            class="btn btn-primary"
            data-dismiss="popup"
            data-control="popup"
            data-handler="onAttachProject">
            <?= e(trans('system::lang.install.project_label')) ?>
        </button>
        <button
            type="button"
            class="btn btn-default"
            data-dismiss="popup">
            <?= e(trans('backend::lang.form.cancel')) ?>
        </button>
    </div>
    <script>
        setTimeout(
            function(){ $('#projectId').select() },
            310
        )
    </script>
<?= Form::close() ?>