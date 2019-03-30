<div class="form-group{{ $errors->has('post_id') ? ' has-error' : '' }}">
    {!! Form::label('post_id', 'post', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::select('post_id', $post, null, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('id') }}</strong>
        </span>
    </div>
</div>

<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
    {!! Form::label('body', 'Body', ['class' => 'col-md-2 control-label']) !!}

    <div class="col-md-8">
        {!! Form::textarea('body', null, ['class' => 'form-control', 'required']) !!}

        <span class="help-block">
            <strong>{{ $errors->first('body') }}</strong>
        </span>
    </div>
</div>

