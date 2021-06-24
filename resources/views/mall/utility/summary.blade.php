@extends('layouts.adminwp')
@section('content')


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">

                <!-- /.card-header -->

                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Unpaid Brands - Summary

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th> Brand ID </th>
                                <th> Brand Name </th>
                                <th> Net Amount</th>


                            </tr>
                        </thead>
                        <tbody>

                            @if(count($utility))

                            @foreach($utility as $c)

                            <tr>
                                <td>{{ $c->ui_brand_id }}</td>

                                <td>{{ $c->ui_brand_name }}</td>
                                <td>{{ number_format($c->total,3) }}</td>




                            </tr>
                            @endforeach

                            @else
                            <tr>
                                <td colspan="12">No Record Found</td>
                            </tr>
                            @endif

                        </tbody>
                        <tfoot>
                            <tr>

                                <th> </th>
                                <th> Total </th>
                                @foreach($utility1 as $gt)
                                <th>{{ number_format($gt->gtotal,3) }}</th>
                                @endforeach
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>


@endsection