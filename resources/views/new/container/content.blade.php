<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="d-flex align-items-center">
            </div>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex no-block justify-content-end align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Active user - project- visitors -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center m-b-10">
                        <h4 class="card-title">Data Guru</h4>
                    </div>
                    <div class="table-responsive">
                        <div id="file_export_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="dt-buttons">
                                
                                <button class="btn waves-effect waves-light btn-info mr-1" tabindex="0" aria-controls="file_export"><span>Tambah Data</span></button>
                            </div>
                            <div id="file_export_filter" class="dataTables_filter">
                                <label>Search NIDN:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="file_export">
                                </label>
                                <button type="button" class="btn waves-effect waves-light btn-success ml-3">Mencari</button>
                            </div>
                            
                            <div id="file_export_filter" class="dataTables_filter mr-3">
                                <label>Search Nama Guru:
                                    <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="file_export">
                                </label>
                            </div>
                            
                            
                            <table id="file_export" class="table bg-white table-bordered nowrap display dataTable no-footer" role="grid" aria-describedby="file_export_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" : activate to sort column descending" style="width: 10px;">No. 
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 183px;"> Nama Guru
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 183px;"> Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending" style="width: 79px;">NIDN
                                        </th>
                                        {{-- <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 69px;">Role</th> --}}
                                        <th class="sorting" tabindex="0" aria-controls="file_export" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 30px;">Kode Guru
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="file_export" style="width: 30px;" colspan="1" >Opsi      
                                        </th>
                                        
                                    </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                         <p class="text-center">2</p>
                                    </td>
                                    <td>
                                        <a href="javscript:void(0)">
                                            Fauziah, S. Kom. , M.M.S.I.	</a>
                                    </td>
                                    <td>mtsziah@gmail.com</td>
                                    <td>234456789</td>
                                    
                                    <td>26</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                        <button type="button" class="btn waves-effect waves-light btn-danger ">
                                            {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                            Hapus
                                        </button>
                                        
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                         <p class="text-center">2</p>
                                    </td>
                                    <td>
                                        <a href="javscript:void(0)">
                                            Wahyudi, S.Si., M.T	</a>
                                    </td>
                                    <td>admin15@gmail.com</td>
                                    <td>0104090784</td>
                                    
                                    <td>14</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                        <button type="button" class="btn waves-effect waves-light btn-danger ">
                                            {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                            Hapus
                                        </button>
                                        
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                         <p class="text-center">3</p>
                                    </td>
                                    <td>
                                        <a href="javscript:void(0)">
                                         Govinda jalan</a>
                                    </td>
                                    <td>govinda@gmail.com</td>
                                    <td>0111130824</td>
                                    
                                    <td>28</td>
                                    <td class="d-flex justify-content-around">
                                        <button type="button" class="btn waves-effect waves-light btn-warning">Ubah</button>
                                        <button type="button" class="btn waves-effect waves-light btn-danger ">
                                            {{-- <i class="ti-close" aria-hidden="true"></i> --}}
                                            Hapus
                                        </button>
                                        
                                    </td>
                                </tr>
                                </tbody>
                        </table>
                        {{-- <div class="dataTables_info" id="file_export_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div> --}}
                        <div class="dataTables_paginate paging_simple_numbers" id="file_export_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="file_export_previous"><a href="#" aria-controls="file_export" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="file_export" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="file_export" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="file_export_next"><a href="#" aria-controls="file_export" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>