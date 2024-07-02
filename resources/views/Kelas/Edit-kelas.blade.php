<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tiket Pemesanan Bus</title>
    @include('template.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="card card-info card-outline">
                    
                </div>

                <!-- Topbar -->
                @include('template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <div class="card-body">
                    <form action="{{ route('Update-kelas',$dt->id) }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" id="Nama_Kelas" name="Nama_Kelas" class="form-control" placeholder="Nama Kelas" value="{{ $dt->Nama_Kelas }}">
                        </div>
                            <div class="form-group">
                                <input type="text" id="Fasilitas" name="Fasilitas" class="form-control" placeholder="Fasilitas" value="{{ $dt->Fasilitas }}">
                            </div>
                            <div class="form-group">
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Ubah Data</button>
                            </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    @include('template.script')

</body>

</html>