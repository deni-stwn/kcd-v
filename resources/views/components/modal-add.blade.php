@props(['title' => '', 'action' => ''])
<div class="modal fade" id="modal-add">
    <form action="{{ $action }}" method="POST" class="modal-dialog modal-lg" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{ $title }}
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $slot !!}
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </form>
    <!-- /.modal-dialog -->
</div>
