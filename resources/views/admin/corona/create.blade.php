@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Corona Post
    </div>

    <div class="card-body">
        <form action="{{ route("admin.corona.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">Title*</label>
                <input type="text" id="name" name="title" class="form-control" value="{{ old('title', isset($corona) ? $corona->title : '') }}">
                @if($errors->has('title'))
                    <p class="help-block">
                        {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control summernote">{{ old('description', isset($corona) ? $corona->description : '') }}</textarea>
                @if($errors->has('description'))
                    <p class="help-block">
                        {{ $errors->first('description') }}
                    </p>
                @endif
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="upload_product_image">Thumbnail</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input" id="upload_product_image" data-crop="product">
                      <label class="custom-file-label" for="upload_product_image">Choose Image</label>
                    </div>
                  </div>
                </div>                
                <!-- Image crop -->
                <div id="images" class="col-md-6"></div>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>


<!-- Modal Product Image -->
<div class="modal fade" id="UploadImageModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="img-container">
            <div class="row">
                <div class="col-md-8">
                    <img id="image_prev" src="https://via.placeholder.com/460x460.png?text=No+Photo" class="img-fluid">
                </div>
                <div class="col-md-4">
                    <div class="preview"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="crop">Crop</button>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
.preview {
  overflow: hidden;
  width: 160px; 
  height: 160px;
  margin: 10px;
  border: 1px solid red;
}
#images .preview_single{
  display: inline-block;
}
.preview_single {
    position: relative;
    transition: all ease 0.1s;
}
.remove_img {
    position: absolute;
    top: 50%;
    right: 85%;
    transform: translate(50%, -50%);
    cursor: pointer;
    color: #e01919;
    opacity: 0;
    z-index: -99;
    transition: all ease 0.1s;
}
.preview_single:hover .remove_img{
  right: 50%;
  z-index: 1;
  opacity: 1;
}
.preview_single:hover img{
  opacity: 0.3;
}
</style>
@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function () {
  var $modal = $('#UploadImageModal');
  var image = document.getElementById('image_prev');
  var cropper;

  $(document).on("change", "#upload_product_image", function(e) {
    e.preventDefault();
      var files = e.target.files;
      var done = function(url) {
          image.src = url;
          $modal.modal('show');
      };
      var reader;
      var file;
      var url;

      if (files && files.length > 0) {
          file = files[0];

          if( (file.size/1000000) > 2){
            toastr.error('Max image size 2MB.', 'Error!');
            return;
          };

          if (URL) {
              done(URL.createObjectURL(file));
          } else if (FileReader) {
              reader = new FileReader();
              reader.onload = function(e) {
                  done(reader.result);
              };
              reader.readAsDataURL(file);
          }
      }
      $(this).val('');
  });

  $modal.on('shown.bs.modal', function() {
      cropper = new Cropper(image, {
          aspectRatio: .9,
          viewMode: 3,
          preview: '.preview'
      });
  }).on('hidden.bs.modal', function() {
      cropper.destroy();
      cropper = null;
      image.src = 'https://via.placeholder.com/460x460.png?text=No+Photo';
  });

  $(document).on('click', '#crop', function() {
    canvas = cropper.getCroppedCanvas({
        width: 1200,
        height: 1080,
    });
    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
        reader.readAsDataURL(blob);
        reader.onloadend = function() {
            var base64data = reader.result;
            $('#images').html(`
              <div class='preview_single'>
              <input type="hidden" name="image" value="${base64data}">
              <img src="${base64data}" width="100" height="100">
              <div class="remove_img"><i class="fas fa-trash"></i></div>
              </div>
              `);
            $modal.modal('hide');
        }
    });
  })

  $(document).on('click', '.remove_img', function() {
    $(this).parent('.preview_single').remove();
  })


 


})
</script>
@endpush