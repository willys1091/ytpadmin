@extends('template')
@section('content')
<div class="bg-body-light">
    <div class="content content-full">
        <div
            class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2 text-center text-sm-left">
            <div class="flex-sm-fill">
                <h1 class="h3 font-w700 mb-2">Main Dashboard</h1>
                <h2 class="h6 font-w500 text-muted mb-0">
                    Welcome <a class="font-w600" href="javascript:void(0)">{{ucwords(Session('name'))}}</a>, everything looks great.
                </h2>
            </div>
            <div class="mt-3 mt-sm-0 ml-sm-3">
                <button type="button" class="btn btn-sm btn-alt-primary"><i class="fa fa-cog"></i></button>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-sm btn-alt-primary" id="dropdown-analytics-overview"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-calendar-alt"></i>
                        Last 30 days
                        <i class="fa fa-fw fa-angle-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm"
                        aria-labelledby="dropdown-analytics-overview">
                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Week</a>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Week</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">This Month</a>
                        <a class="dropdown-item font-w500" href="javascript:void(0)">Previous Month</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div
                    class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700"></dt><dd class="text-muted mb-0">Destination</dd>
                    </dl>
                    <div class="item item-rounded bg-body"><i class="fa fa-shopping-cart font-size-h3 text-primary"></i></div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{url('destination')}}">
                        View all Destination <i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div
                    class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700"></dt><dd class="text-muted mb-0">New Users</dd>
                    </dl>
                    <div class="item item-rounded bg-body"><i class="fa fa-users font-size-h3 text-primary"></i></div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{url('destination')}}">
                        View all User<i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div
                    class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700"></dt> <dd class="text-muted mb-0">Youtuber</dd>
                    </dl>
                    <div class="item item-rounded bg-body"><i class="fa fa-inbox font-size-h3 text-primary"></i></div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="{{url('people/admin/youtuber')}}">
                        View all Youtuber<i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="block block-rounded d-flex flex-column">
                <div
                    class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                    <dl class="mb-0">
                        <dt class="font-size-h2 font-w700"></dt>
                        <dd class="text-muted mb-0">Post Video</dd>
                    </dl>
                    <div class="item item-rounded bg-body">
                        <i class="fa fa-chart-line font-size-h3 text-primary"></i>
                    </div>
                </div>
                <div class="block-content block-content-full block-content-sm bg-body-light font-size-sm">
                    <a class="font-w500 d-flex align-items-center" href="javascript:void(0)">
                        View All Video<i class="fa fa-arrow-alt-circle-right ml-1 opacity-25 font-size-base"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

@section('footerScript')
<script src="{{asset('public/js/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('public/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('public/js/pages/be_pages_dashboard.min.js')}}"></script>
<script>
    jQuery(function () {
One.helpers(['sparkline']);
    });
</script>
@endsection