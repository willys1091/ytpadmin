<div class="row">
    <div class="form-group col-sm-6">
        <div class="form-group">
            <label for="Name">URL</label>
            <input type="text" class="form-control" name="url" placeholder="URL" value="">
        </div>
    </div>
    <div class="form-group col-sm-6" x-data="{ filenames: @entangle('filenames') }">
        <div class="form-group" >
            <span @getimg.window="filenames = $event.detail.filename" x-model="filenames"></span>
            {!! $filenames<>''?'<img src="'.asset('media/temp/bulletin/img/'.$filenames).'" width="250px" class="img-fluid">':'' !!}
            {{--  {!! $datalogo<>'0'&&$filenames==''?'<img src="'.asset('public/media/logo/company/'.$datalogo).'" width="250px">':'' !!} --}}
        </div>
    </div>
</div>
