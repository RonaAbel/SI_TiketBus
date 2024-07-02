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
                    <div class="card-header">
                        <div class="card-tools">

                        </div>
                    </div>
                </div>

                <!-- Topbar -->
                @include('template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Kelas</h1>
                        <a href="{{ route('Create-kelas') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus-square fa-sm text-white-50"></i> Tambah Data</a>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Kelas</th>
                            <th>Fasilitas</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($dtKelas as $item)    
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->Nama_Kelas }}</td>
                            <td>{{ $item->Fasilitas }}</td>
                            <td>
                                <a href="{{ route('Edit-kelas',$item->id) }}"><i class="fas fa-edit"></i></a> 
                                | 
                                <a href="{{ route('Delete-kelas',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            {{ $dtKelas->links() }}
                    <a href="{{ route("Cetak-kelas") }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Cetak Data</a>
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

    @include('sweetalert::alert')


</body>

</html>