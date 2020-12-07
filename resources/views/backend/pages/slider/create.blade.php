@extends('backend.layout.master')
@section('content')
        <div class="main-content">
            <div class="container-fluid">

               <div class="row justify-content-md-center">

                    <div class="col-md-8">
                        <!-- alert message -->
                        <div class="alert" id="message style="display:none">
                       
                        </div>

                        <div class="card card-info mt-2">
                            <div class="card-header">
                                <h3 class="card-title">Create New {{ $title }}</h3>
                            </div>


                            <form action="{{ route('slider.store') }}" name="uploaded_form" id="uploaded_form" enctype="multipart/form-data" method="POST">
                            
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">


                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input class="form-control" name="title" id="title" placeholder="Enter slider title">
                                </div>

                               <div class="form-group">
                                    <label for="title2">Bottom Title<span class="text-danger">*</span></label>
                                    <input class="form-control" name="title2" id="title2" placeholder="Enter slider short description">
                                </div>

                                <div class="form-group">
                                <label for="image">Slider Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">

                            </div>


                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option>Select status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>

                                    </select>
                                </div>

                                 <div class="form-group">
                                  <img id="showImage" src="" style="height: 150px; width: 150px; border: 2px solid #000019">
                                </div>


                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Save</button>
                                <a href="{{ route('slider.index') }}" class="btn btn-danger"><i class="fas fa-undo"></i></a>
                            </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>

                    <div class="col-md-6">

                    </div>

                </div>
            </div>
        </div>





@endsection
@push('scripts')
<script>

    $(document).ready(function() {
                  $('#uploaded_form').on('submit', function() {
                    event.preventDefault()
                      $.ajax({
                          url: "{{ route('slider.store') }}",
                          method: "POST",
                          data: new FormData(this),
                          dataType: 'JSON',
                          contentType: false,
                          cache: false,
                          processData: false,
                          success:function(data){
                            $('#message').css('display','block');
                            $('#message') .html(data.message);
                            $('#message') .addClass(data.class_name);
                            $('#showImage') .addClass(data.showImage);

                          }
                      });


    });

</script>
@endpush
