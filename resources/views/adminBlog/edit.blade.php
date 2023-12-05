@extends('admin.index')

@section('content')
    <div class="content-wrapper bg-white">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Berita</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Cat</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <form action="{{ route('blog.update', $blog) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h4>Edit Blog</h4>
                        <div class="form-group">
                            {{-- <x-input required field='title' type='text' label="Judul" />
                            <x-input required field='slug' type='text' label="slug" /> --}}
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $blog->title }}"
                                class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="slug">Slug</label>
                            <input type="text" name="slug" id="slug" value="{{ $blog->slug }}"
                                class="form-control @error('slug') is-invalid @enderror">
                            @error('slug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="content" class="pt-2">Content</label>
                            <textarea name="content" id="content-edit">{{ $blog->content }}</textarea>
                            <label for="document">Image Saat ini</label>
                            <div class="row">
                                @foreach ($blog->documents as $document)
                                    <div class="col-2">
                                        <img class="w-4 h-4  tw-rounded-full" src="{{ $document['preview'] }}"
                                            alt="ds">
                                    </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <label for="document">Update Image</label>
                                <div class="needsclick dropzone" id="document-dropzone">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $('#content-edit').summernote({
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
@endsection
