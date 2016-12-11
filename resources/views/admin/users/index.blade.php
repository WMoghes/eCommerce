@extends('admin.layouts.layout')

@section('header')
        <!-- DataTables -->
{!! Html::style('admin/assets/plugins/datatables/jquery.dataTables.min.css') !!}
{!! Html::style('admin/assets/plugins/datatables/buttons.bootstrap.min.css') !!}
{{--    {!! Html::style('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css') !!}--}}
{!! Html::style('admin/assets/plugins/datatables/responsive.bootstrap.min.css') !!}
{{--    {!! Html::style('admin/assets/plugins/datatables/scroller.bootstrap.min.css') !!}--}}
{{--    {!! Html::style('admin/assets/plugins/datatables/dataTables.colVis.css') !!}--}}
{!! Html::style('admin/assets/plugins/datatables/dataTables.bootstrap.min.css') !!}
{{--    {!! Html::style('admin/assets/plugins/datatables/fixedColumns.dataTables.min.css') !!}--}}
@endsection

@section('page_title')
    {{ trans('welcome.dashboard') }}
@endsection

@section('content_header')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('dashboard') }}">{{ trans('welcome.dashboard') }}</a>
        </li>
        <li class="active">
            {{ trans('welcome.users') }}
        </li>
    </ol>
@endsection

@section('content')
    @include('admin.layouts.flash_message')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <h4 class="m-t-0 header-title"><b>{{ trans('welcome.users_show') }}</b></h4>
                <hr>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('welcome.name') }}</th>
                            <th>{{ trans('welcome.email') }}</th>
                            <th>{{ trans('welcome.permission') }}</th>
                            <th>{{ trans('welcome.created_at') }}</th>
                            <th>{{ trans('welcome.updated_at') }}</th>
                            <th>{{ trans('welcome.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($users as $user)--}}
                        {{--<tr>--}}
                            {{--<td>{{ $user->id }}</td>--}}
                            {{--<td>{{ $user->name }}</td>--}}
                            {{--<td>{{ $user->email }}</td>--}}
                            {{--<td>--}}
                                {{--{{ ($user->admin == 1) ? trans('welcome.admin') : trans('welcome.user') }}--}}
                            {{--</td>--}}
                            {{--<td>{{ $user->created_at }}</td>--}}
                            {{--<td>{{ $user->updated_at }}</td>--}}
                            {{--<td>--}}
                                {{--<a href="{{ route('adminpanel.users.edit', $user->id) }}" style="padding: 10px">--}}
                                    {{--<i class="fa fa-pencil"></i></a>--}}
                                {{--<a href="{{ url('/adminpanel/users/' . $user->id . '/delete') }}"><i class="fa fa-trash-o"></i></a>--}}
                            {{--</td>--}}

                        {{--</tr>--}}
                    {{--@endforeach--}}

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('welcome.name') }}</th>
                            <th>{{ trans('welcome.email') }}</th>
                            <th>{{ trans('welcome.permission') }}</th>
                            <th>{{ trans('welcome.created_at') }}</th>
                            <th>{{ trans('welcome.updated_at') }}</th>
                            <th>{{ trans('welcome.actions') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var resizefunc = [];
    </script>
    {!! Html::script('admin/assets/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/dataTables.bootstrap.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/dataTables.buttons.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/buttons.bootstrap.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/jszip.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/pdfmake.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/vfs_fonts.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/buttons.html5.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/buttons.print.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/dataTables.keyTable.min.js') !!}
    {!! Html::script('admin/assets/pages/datatables.init.js') !!}
    {{--{!! Html::script('admin/assets/plugins/datatables/dataTables.fixedHeader.min.js') !!}--}}
    {!! Html::script('admin/assets/plugins/datatables/dataTables.responsive.min.js') !!}
    {!! Html::script('admin/assets/plugins/datatables/responsive.bootstrap.min.js') !!}
    {{--{!! Html::script('admin/assets/plugins/datatables/dataTables.scroller.min.js') !!}--}}
    {{--{!! Html::script('admin/assets/plugins/datatables/dataTables.colVis.js') !!}--}}
    {{--{!! Html::script('admin/assets/plugins/datatables/dataTables.fixedColumns.min.js') !!}--}}
    <script type="text/javascript">
        $(document).ready(function () {

            var table = $('#datatable-buttons').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": '{{ url('/adminpanel/users/data') }}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'admin', name: 'admin'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'control', name: '', sortable: false, searchable: false}
                ],
                paging: true,
                searching: true,
                "language" : {
                    "url" : "{{ Request::root() }}/json/Arabic.json"
                },
                aLengthMenu: [
                    [25, 50, 100, 200, -1],
                    [25, 50, 100, 200, "All"]
                ],
                "pagingType" : "full_numbers",
                fixedHeader: true,
                "dom": '<"pull-right"B><"pull-left"f><"text-center"l>rt<"pull-right"i><"pull-left"p><"clear">',
                buttons: [{
                    extend: "copy",
                    text: "نسخ",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    text: "إكسل",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    text: "طباعة",
                    className: "btn-sm"
                }],
                responsive: true
            });
            // this code working will to create textbox below each column in the table
//            $('#datatable-buttons tfoot th').each(function() {
//                var title = $('#datatable-buttons thead th').eq($(this).index()).text();
//                if($(this).index() > 0 && $(this).index() < 4){
//                    $(this).html('<input type="text" class="form-control input-sm" placeholder="بحث ' + title + '" />');
//                }
//            });

        });
    </script>
@endsection