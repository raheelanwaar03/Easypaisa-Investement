@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Verification Page Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Text</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($texts as $text)
                                            <tr>
                                                <td>{{ $text->text }}</td>
                                                <td>
                                                    <a href="{{ route('Admin.Edit.Verification.Text', ['id' => $text->id]) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--**********************************
                                                Footer start
                                            ***********************************-->
                <div class="footer">
                    <div class="copyright">
                        <p>Copyright © Designed &amp; Developed by <a href="#">
                                {{ env('APP_NAME') }}</a> 2022</p>
                    </div>
                </div>
                <!--**********************************
                                                Footer end
                                            ***********************************-->

            </div>
        </div>
    @endsection
