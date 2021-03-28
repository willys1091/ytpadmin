<div class="col-lg-6">
    <div class="form-group " x-data="{ filenames: @entangle('filenames') }">
        <span @getimg.window="filenames = $event.detail.filename" x-model="filenames"></span>
        {!! $filenames<>''?'<img src="'.asset('media/temp/about/'.$filenames).'" width="200px" class="img-fluid">':'' !!}
        {!! $dataimg<>'0'&&$filenames==''?'<img src="'.Session('docs').'/img/about/'.$dataimg.'" width="100px" class="img-fluid">':'' !!}
    </div>
</div>
