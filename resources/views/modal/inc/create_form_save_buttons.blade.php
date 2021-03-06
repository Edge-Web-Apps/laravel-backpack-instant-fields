<div id="saveActions" class="form-group">

    <button type="submit" class="btn btn-success">
        <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
        <span data-value="save_and_back">{{ trans('backpack::crud.save') }}</span>
    </button>

    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#{{ $entity }}_create_modal">
        <span class="fa fa-ban"></span> {{ trans('backpack::crud.cancel') }}
    </button>
</div>
