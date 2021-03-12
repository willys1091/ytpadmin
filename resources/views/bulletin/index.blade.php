@extends('template')
@section('content')
<div class="content">
    <div class="block block-rounded">
        <div class="block-content block-content-full"> 
            <table class="table table-bordered table-striped dt-responsive table-vcenter js-dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">URL</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php $x=1 @endphp
                    @foreach($bulletin as $b)
                    <tr>
                        <td class="text-center font-size-sm">{{$x}}</td>
                        <td class="text-center"><img src="http://doc.ytp.test/img/buletin/{{$b->img}}" width="100px"></td>
                        <td><a href="{{$b->url}}"><i class="fa fa-globe"></i></a></td>
                        <td class="text-center">
                            @livewire('active', ['status' => $b->active,'modul'=> 'bulletin','key'=> $b->id])
                            <a onClick='showM("{{url('bulletin/'.$b->id.'/edit')}}");return false' type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Edit"><i class="fas fa-fw fa-pencil-alt"></i></a>
                        </td>
                    </tr> 
                    @php $x++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section ('headerScript')
    @livewireStyles
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/datatables/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('js/plugins/flatpickr/flatpickr.min.css')}}">
@endsection

@section ('footerScript')
    @livewireScripts
    <script>Livewire.restart();</script>
    <script src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('js/siapfulin.js')}}"></script>
    <script src="{{asset('js/plugins/select2/js/select2.full.min.js')}}"></script>
@stack('scripts')
<script>
    
    jQuery(function () {
        Siap.helpers(['flatpickr']);
    });
</script>
@endsection
