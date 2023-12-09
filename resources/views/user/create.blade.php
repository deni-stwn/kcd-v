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
                            <x-input required field='name' type='text' label="Nama" />
                            <x-input required field='email' type='email' label="Email" />
                            <x-input required field='password' type='password' label="Password" />
                            <x-input required field='password_confirmation' type='password'
                                label="Konfirmasi Password" />
                            {{-- <x-input required field='slug' type='text' label="slug" /> --}}
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
