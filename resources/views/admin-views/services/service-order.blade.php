@extends('layouts.back-end.app')

@section('title', \App\CPU\translate('Services List'))

@push('css_or_js')

@endpush

@section('content')
    <div class="content container-fluid">  <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">{{\App\CPU\translate('Dashboard')}}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{\App\CPU\translate('Services')}}</li>
            </ol>
        </nav>

        <div class="row" style="margin-top: 20px">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row flex-between justify-content-between align-items-center flex-grow-1">
                            <div class="col-12 mb-1 col-md-4">
{{--                                <h5 class="flex-between">--}}
{{--                                    <div>{{\App\CPU\translate('Services_table')}} ({{ $pro->total() }})</div>--}}
{{--                                </h5>--}}
                            </div>
                            <div class="col-12 mb-1 col-md-5" style="width: 40vw">
                                <!-- Search -->
{{--                                <form action="{{ url()->current() }}" method="GET">--}}
{{--                                    <div class="input-group input-group-merge input-group-flush">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                            <div class="input-group-text">--}}
{{--                                                <i class="tio-search"></i>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <input id="datatableSearch_" type="search" name="search" class="form-control"--}}
{{--                                               placeholder="{{\App\CPU\translate('Search Services Name')}}" aria-label="Search orders"--}}
{{--                                               value="{{ $search }}" required>--}}
{{--                                        <input type="hidden" value="{{ $request_status }}" name="status">--}}
{{--                                        <button type="submit" class="btn btn-primary">{{\App\CPU\translate('search')}}</button>--}}
{{--                                    </div>--}}
{{--                                </form>--}}
{{--                                <!-- End Search -->--}}
                            </div>
{{--                            <div class="col-12 col-md-3">--}}
{{--                                @if (!isset($request_status))--}}
{{--                                    <a href="{{route('admin.services.add-new')}}" class="btn btn-primary  float-right">--}}
{{--                                        <i class="tio-add-circle"></i>--}}
{{--                                        <span class="text">{{\App\CPU\translate('Add new Service')}}</span>--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="card-body" style="padding: 0">
                        <div class="table-responsive">
                            <table id="datatable" style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                                   class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                                   style="width: 100%">
                                <thead class="thead-light">
                                <tr>
                                    <th>{{\App\CPU\translate('SL#')}}</th>
                                    <th>{{\App\CPU\translate('Number Phone Customer')}}</th>
                                    <th>{{\App\CPU\translate('Notes')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $k=>$p)
                                    <tr>
                                        <td>
                                           {{$p->id}}
                                        </td>
                                        <td>
                                            {{$p->phone}}
                                        </td>
                                        <td>
                                            {{$p->notes}}
                                        </td>

{{--                                        <td>--}}
{{--                                            <form action="{{route('admin.services.delete',[$p['id']])}}"--}}
{{--                                                  method="post" id="product-{{$p['id']}}">--}}
{{--                                                @csrf @method('delete')--}}
{{--                                            </form>--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
{{--                        {{$p->links()}}--}}
                    </div>
{{--                    @if(count($pro)==0)--}}
{{--                        <div class="text-center p-4">--}}
{{--                            <img class="mb-3" src="{{asset('public/assets/back-end')}}/svg/illustrations/sorry.svg" alt="Image Description" style="width: 7rem;">--}}
{{--                            <p class="mb-0">{{\App\CPU\translate('No data to show')}}</p>--}}
{{--                        </div>--}}
{{--                    @endif--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <!-- Page level plugins -->
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/assets/back-end')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function () {
            $('#dataTable').DataTable();
        });

        $(document).on('change', '.status', function () {
            var id = $(this).attr("id");
            if ($(this).prop("checked") == true) {
                var status = 1;
            } else if ($(this).prop("checked") == false) {
                var status = 0;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.product.status-update')}}",
                method: 'POST',
                data: {
                    id: id,
                    status: status
                },
                success: function (data) {
                    if(data.success == true) {
                        toastr.success('{{\App\CPU\translate('Status updated successfully')}}');
                    }
                    else if(data.success == false) {
                        toastr.error('{{\App\CPU\translate('Status updated failed. Product must be approved')}}');
                        setTimeout(function(){
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });

        function featured_status(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: "{{route('admin.product.featured-status')}}",
                method: 'POST',
                data: {
                    id: id
                },
                success: function () {
                    toastr.success('{{\App\CPU\translate('Featured status updated successfully')}}');
                }
            });
        }

    </script>
@endpush
