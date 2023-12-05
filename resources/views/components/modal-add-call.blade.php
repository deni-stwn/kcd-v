<button id="modal-add-button" type="button" class="btn btn-primary mb-3" data-toggle="modal">
    {!! $slot !!}
</button>

@push('scripts')
    <script>
        let modalAddButton = document.querySelector('#modal-add-button');
        let myModal = new bootstrap.Modal(document.getElementById('modal-add'), {
            keyboard: false
        })
        modalAddButton.addEventListener('click', function() {
            myModal.toggle()
            let selectAdd = $("#modal-add .js-example-basic-single").select2();
        })
    </script>
@endpush
