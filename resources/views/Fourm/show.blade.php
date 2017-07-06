@extends('../app');

@section('title', 'Login')


@section('main-content')

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    Discussion Form
                    <small>Add new topic <a href="https://datatables.net/" target="_blank">For Discussion</a></small>
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>

                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>test</th>
                                </tr>
                                </thead>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

        </div>
    </section>


@endsection