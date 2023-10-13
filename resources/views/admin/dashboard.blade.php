@extends('admin.layout.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9">
                    <div class="row">
                    </div>
                </div>
            </div>
            <!--**********************************
            Footer start
        ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">
                            {{ env('APP_NAME') }}</a> 2022</p>
                </div>
            </div>
            <!--**********************************
            Footer end
        ***********************************-->

        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add Person</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="PersonName1" class="form-label d-block">Enter Name</label>
                        <input type="text" id="PersonName1" class="form-control w-100 mb-3" placeholder="Username">
                        <label for="PersonPosition1" class="form-label d-block">Enter Position</label>
                        <input type="text" id="PersonPosition1" class="form-control w-100" placeholder="Position">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal -->
    </div>
@endsection
