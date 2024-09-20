@extends('layouts.template')
@section('css')
    <link href="{{asset('assets/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/select2/select2-bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('current-page')
    My Subjects
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>My Modules </h5>
                    <div class="ibox-tools">

                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example w-100" width="100" >
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Subject Name</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1; ?>
                            @foreach($my_modules as $my_module)

                                <tr style="cursor: pointer">

                                    <td width="100" class="text-left">{{$i}}</td>
                                    <td > <a href="{{route('my-module.show',\Vinkla\Hashids\Facades\Hashids::encode($my_module->id))}}">{{$my_module->subject->name}}</a></td>
                                    <td > <a href="{{route('my-module.show',\Vinkla\Hashids\Facades\Hashids::encode($my_module->id))}}">{{$my_module->subject->description}}</a></td>

                                </tr>



                                    <?php $i++;?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')
    <script src="{{asset('assets/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/select2/select2.full.min.js')}}"></script>


@endsection
