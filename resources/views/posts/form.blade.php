<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title"
        value="{{ isset($post->title) ? $post->title : '' }}">
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    <label for="content" class="control-label">{{ 'Content' }}</label>
    <textarea class="form-control" rows="5" name="content" type="textarea" id="content">{{ isset($post->content) ? $post->content : '' }}</textarea>
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<?php echo 'asdas'; ?>
<?= 'asdas' ?>
{{ 'asdas' }}

<?php if (sadfsdf){ ?>
asdlkjasd
<?php }else{ ?>
asdasd
<?php } ?>

@if (asdasd)
    <div>asdasd</div>
@else
    asdasd
@endif

<?php foreach($something as $some){ ?>
    <li>asdasd</li>
<?php } ?>

@if(!empty($something))
@foreach($something as $some)
<li>asdasd</li>
@endforeach
@endif
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
