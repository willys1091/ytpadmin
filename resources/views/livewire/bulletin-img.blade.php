<div class="row">
    <div class="form-group col-sm-6">
        <label>Document <span class="text-danger">*</span></label>
        <div class="custom-file">
            <input wire:model="doc" type="file" class="custom-file-input" data-toggle="custom-file-input"  name="userfile2" accept='application/pdf' >
            <label class="custom-file-label" for="userfile2">{{substr($docfilename,0,20)??'Choose file'}}</label>
            <input type="hidden" name="docfilename" value="{{$docfilename??''}}">
            <input type="hidden" name="docext" value="{{$docext??''}}">
        </div>
    </div>
    <div class="form-group col-sm-6">
        <label>Image <span class="text-danger">*</span></label>
        <div class="custom-file">
            <input wire:model="img" type="file" class="custom-file-input" data-toggle="custom-file-input"  name="userfile" accept='image/*'>
            <label class="custom-file-label" for="userfile">{{substr($imgfilename,0,20)??'Choose file'}}</label>
            <input type="hidden" name="imgfilename" value="{{$imgfilename??''}}">
            <input type="hidden" name="imgext" value="{{$imgext??''}}">
            <input type="hidden" name="newid" value="{{$newid??''}}">
        </div>
    </div>
</div>