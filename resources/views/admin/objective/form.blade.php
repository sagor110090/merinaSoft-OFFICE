<div class="form-group {{ $errors->has('header') ? 'has-error' : ''}}">
    <label for="header" class="control-label">{{ 'objective Header' }}</label>
    <input class="form-control" name="header" type="text" id="header" value="{{ isset($objective->header) ? $objective->header : ''}}" required>
    {!! $errors->first('header', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'description' }}</label>
    <input class="form-control" name="description" type="text" id="description" value="{{ isset($objective->description) ? $objective->description : ''}}" required>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fcq') ? 'has-error' : ''}}">
    <label for="fcq" class="control-label">{{ 'FCQ' }}</label>
    <input class="form-control" name="fcq" type="text" id="fcq" value="{{ isset($objective->fcq) ? $objective->fcq : ''}}" required>
    {!! $errors->first('fcq', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" >
            <input type='text'  name="old_image" value="{{ isset($objective->image) ? $objective->image : ''}}" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview">
        <div id="imagePreview" style="background-image: url({{(isset($objective->image) ? Storage::url($objective->image) : 'https://4.bp.blogspot.com/_j-IldstRiaI/TS7AcMnzI0I/AAAAAAAAAFc/5548Yg80r30/w1200-h630-p-k-no-nu/110075pp.jpg')}});">
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary btn-sm" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
