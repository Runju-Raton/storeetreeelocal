@extends('backend.layouts.content')
@section('content')

<div class="content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1> Add Relation </h1>
        <ol class="breadcrumb">
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">


        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">New Relation Info</h3>
                    </div>

                    @include('backend.include.error')

                    {!! Form::open(['method'=>'POST', 'action'=>'backend\RelationController@store']) !!}

                    <div class="box-body">
                        <div class="col-md-6">

                            <div class="form-group">
                                {!! Form::label('parent_id', 'Parent') !!}
                                {!! Form::select('parent_id', [''=>'Choose an option']+$parents, null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('sort', 'Order') !!}
                                {!! Form::text('sort', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('gender', 'Gender') !!}
                                {!! Form::select('gender', [''=>'Choose an option']+Config::get('constants.GENDERS'), null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::checkbox('status', '1', 1, ['id'=>'status', 'class'=>'form-control']) !!}
                                {!! Form::label('status', '&nbsp;Active') !!}
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>


            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->

                <!-- /.box -->
                <!-- general form elements disabled -->

                <!-- /.box -->
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection

@section('scripts')

<script>

    $(function () {
        $('input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        
        $("#parent_id").select2({
            placeholder: "Choose an option"
        });
        
        $("#gender").select2({
            placeholder: "Choose an option"
        });
    });
</script>

@endsection