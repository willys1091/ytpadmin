<div class="form-group">
    <label>Image <span class="text-danger">*</span></label>
    <div class="custom-file">
        <input wire:model="img" type="file" class="custom-file-input" data-toggle="custom-file-input"  name="userfile" accept='image/*'>
        <label class="custom-file-label" for="userfile">{{substr($imgfilename,0,20)??'Choose file'}}</label>
        <input type="hidden" name="imgfilename" value="{{$imgfilename??''}}">
        <input type="hidden" name="imgext" value="{{$imgext??''}}">
        <input type="hidden" name="newid" value="{{$newid??''}}">
    </div>
</div>
