@extends('dashboard-admin.layouts.main')
@section('container')

<div class="table-responsive">
    <div
        id="w0-container"
        class="table-responsive kv-grid-container"
    >
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-success mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total Semua User</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-info mb-3" style="max-width: 18rem;">
                        <div class="card-body border-dark">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total User Mahasiswa</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-warning mb-3" style="max-width: 18rem;">
                        <div class="card-body border-dark">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total User Selain Mahasiswa</p>
                        </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12 border-dark">
                <div class="card bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">0</h5>
                            <p class="card-text">Total User Active</p>
                        </div>
                </div>
            </div>
        </div>
        <table
            class="table text-nowrap table-striped table-bordered mb-0 kv-grid-table kv-table-wrap"
        >
            <thead>
                <tr>
                    <th style="width: 4.95%">NO</th>
                    <th style="width: 6%">ID User</th>
                    <th data-col-seq="1" style="width: 20.11%">
                        User
                    </th>
                    <th data-col-seq="1" style="width: 20.11%">
                        Username
                    </th>
                    <th data-col-seq="2" style="width: 10.46%">
                        Tanggal Dibuat
                    </th>
                    <th data-col-seq="3" style="width: 10.46%">
                        Jam Dibuat
                    </th>
                    <th data-col-seq="4" style="width: 11.13%">
                        Status
                    </th>
                    <th data-col-seq="5" style="width: 10.46%">
                        Keterangan
                    </th>
                    <th data-col-seq="6" style="width: 11%">
                        Action
                    </th>
                </tr>

                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="no"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="id"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="user"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                    />
                </td>
                <td>
                    <input
                        type="date"
                        id="datepick"
                        class="form-control"
                        name="tanggaldibuat"
                    />
                </td>
                <td>
                    <input
                        type="time"
                        id="appt"
                        class="form-control"
                        name="jamdibuat"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="status"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="keterangan"
                    />
                </td>
            </thead>

            <tbody>
                <tr class="w0" data-key="260481">
                    <td>1</td>
                    <td>DPMHS02102022A</td>
                    <td class="w0" data-col-seq="1">
                        Dito Pamungkas
                    </td>
                    <td class="w0" data-col-seq="1">
                        ditopamungkas
                    </td>
                    <td class="w0" data-col-seq="2">
                        02/10/2022
                    </td>
                    <td class="w0" data-col-seq="3">09:00 WIB</td>
                    <td class="w0" data-col-seq="3">Mahasiswa</td>
                    <td class="w0" data-col-seq="4" style="white-space: pre-line;">Active</td>
                    <td>
                        <button
                            type="button"
                            class="btn btn-primary"
                        >
                        <i class='bx bx-detail'></i>
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger"
                            onclick="(function(){
                                swal({
                                    title: 'Yakin Ingin Menghapus Data',
                                    icon: 'warning',
                                    buttons: true,
                                    dangerMode: true,
                                    })
                                    .then((willDelete) => {
                                    if (willDelete) {
                                        swal('Poof! Your imaginary file has been deleted!', {
                                        icon: 'success',
                                    });
                                    } else {
                                        swal('Data Batal Dihapus');
                                    }
                                });
                            })();return false;"
                        >
                            <i class='bx bxs-trash'></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection