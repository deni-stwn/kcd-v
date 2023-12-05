<div class="">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <!-- /.card-header -->
                    <!-- form start -->
                    <div>
                        <div class="">
                            <x-input required field='title' type='text' label="Judul" />
                            {{-- <x-input required field='slug' type='text' label="slug" /> --}}
                            <label for="content" class="pt-2">Content</label>
                            <textarea name="content" id="content"></textarea>
                            <div class="form-group">
                                <label for="document">Photo_loc</label>
                                <div class="needsclick dropzone" id="document-dropzone">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

                <!--/.col (left) -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('scripts')
    <script>
        $('#content').summernote({
            placeholder: 'Write here...',
            tabsize: 2,
            height: 100
        });
    </script>
    <script>
        let uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('blogs.storeMedia') }}',
            maxFilesize: 5, // MB
            acceptedFiles: '.jpg, .jpeg, .png, .bmp, .gif, .svg',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function(file) {
                file.previewElement.remove()
                let name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($location) && $location->documents)
                    let files =
                        {!! json_encode($location->documents) !!}
                    for (let i in files) {
                        let file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                    }
                @endif
            }
        }
    </script>
@endpush
