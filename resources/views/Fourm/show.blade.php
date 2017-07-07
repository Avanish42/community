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
                                    <th>Id</th>
                                    <th>Tpoic</th>
                                    <th>Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Show Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{$d['id'] }}</td>
                                        <td>{{$d['title'] }}</td>
                                        <td>{{$d['details'] }}</td>
                                        <td>edit</td>
                                        <td>delete</td>
                                        <td>sowcomment</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->

        </div>
    </section>


@endsection