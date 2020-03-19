<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'header' }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($contact->header) ? $contact->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:contact</p>') !!}
</div>
<div class="form-group {{ $errors->has('body_text') ? 'has-error' : ''}}">
    <label for="body_text" class="control-label">{{ 'body_text' }}</label>
    <textarea name="body_text" id="editor"   cols="30" rows="10" required>
        {{ isset($contact->body_text) ? $contact->body_text : ''}}
    </textarea>
    {!! $errors->first('body_text', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mail') ? 'has-error' : ''}}">
    <label for="mail" class="control-label">{{ 'Mail' }}</label>
    <input class="form-control" name="mail" type="text" id="mail" value="{{ isset($contact->mail) ? $contact->mail : ''}}" required>
    {!! $errors->first('mail', '<p class="help-block">:contact</p>') !!}
</div>
<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="control-label">{{ 'Phone' }}</label>
    <input class="form-control" name="phone" type="text" id="phone" value="{{ isset($contact->phone) ? $contact->phone : ''}}" required>
    {!! $errors->first('phone', '<p class="help-block">:contact</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($contact->address) ? $contact->address : ''}}" required>
    {!! $errors->first('address', '<p class="help-block">:contact</p>') !!}
</div>


{{-- office time set --}}
<div class="form-group {{ $errors->has('start_time') ? 'has-error' : ''}}">
    <label for="start_time" class="control-label">{{ 'Office start_time' }}</label>
    <input type="text" name="start_time" class="timepicker"/>
    <label for="end_time" class="control-label">{{ 'Office end_time' }}</label>
    <input type="text" name="end_time" class="timepicker"/>
</div>
<div class="form-group {{ $errors->has('off_day') ? 'has-error' : ''}}">
    <label for="off_day" class="control-label">{{ 'Off Days' }}</label>
    <input class="form-control" name="off_day" type="text" id="off_day" value="{{ isset($contact->off_day) ? $contact->off_day : ''}}" required>
    {!! $errors->first('off_day', '<p class="help-block">:contact</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
