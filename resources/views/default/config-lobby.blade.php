<div class="youplay-content" style="max-width: 600px;margin: 20px auto;">
    <h2 class="container h1" id="about">Config your lobby</h2>
    {!! Form::model($lobby, ['action' => 'DefaultController@index', 'class' => 'comment-form']) !!}
    @include('errors.list')
    <label for="type">Type</label>
    <div class="youplay-select">
        {!! Form::select('type', $types) !!}
        <p class="help-block"></p>
    </div>
    <label for="type">Type</label>
    <div class="youplay-input">
        {!! Form::textarea('comment', null, ['placeholder' => trans('messages.title')]) !!}
        <p class="help-block"></p>
    </div>
    <label for="type">Type</label>
    <div class="row">
        <div class="col-sm-6">
            <div class="youplay-select">
                {!! Form::select('rank_min', $ranks) !!}
                <p class="help-block"></p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="youplay-select">
                {!! Form::select('rank_max', $ranks) !!}
                <p class="help-block"></p>
            </div>
        </div>
    </div>

    <div class="youplay-checkbox pull-left">
        <input type="checkbox" name="is_active" id="is_active">
        {!! Form::label('is_active', 'Show lobby') !!}
    </div>

    {!! Form::button('Submit', ['class' => 'btn btn-default pull-right']) !!}
    <div class="clearfix"></div>
    {!! Form::close() !!}
</div>