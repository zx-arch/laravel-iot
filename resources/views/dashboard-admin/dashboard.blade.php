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
                        <p class="card-text">Total Semua User yang Terdaftar</p>
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 border-dark">
            <div class="card bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-body border-dark">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">Total Semua Ruangan</p>
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 border-dark">
            <div class="card bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">Total Semua User Masuk Hari Ini</p>
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 border-dark">
            <div class="card bg-danger mb-3" style="max-width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                        <p class="card-text">Total Semua User Masuk UKDW</p>
                    </div>
            </div>
        </div>
    </div>
        <table
            class="table text-nowrap table-striped table-bordered mb-0 kv-grid-table kv-table-wrap"
        >
            <thead>
                <tr>
                    <th style="width: 6.95%">NO</th>
                    <th style="width: 6%">ID Entry</th>
                    <th data-col-seq="1" style="width: 15.11%">
                        Username
                    </th>
                    <th data-col-seq="2" style="width: 10%">
                        Tanggal
                    </th>
                    <th data-col-seq="1" style="width: 10.11%">
                        Ruangan
                    </th>
                    <th data-col-seq="5" style="width: 10.81%">
                        Jam Masuk
                    </th>
                    <th data-col-seq="5" style="width: 10.81%">
                        Jam Keluar
                    </th>
                    <th data-col-seq="5" style="width: 10.81%">
                        Keterangan
                    </th>
                    <th data-col-seq="5" style="width: 10.81%">
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
                        name="username"
                    />
                </td>
                <td>
                    <input
                        type="date"
                        id="datepick"
                        class="form-control"
                        name="tanggal"
                    />
                </td>
                <td>
                    <input
                        type="text"
                        class="form-control"
                        name="ruangan"
                    />
                </td>
                <td>
                    <input
                        type="time"
                        class="form-control"
                        name="jam_masuk"
                    />
                </td><td>
                    <input
                        type="time"
                        class="form-control"
                        name="jam_keluar"
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
                    <td>UKDWAAI0001</td>
                    <td class="w0" data-col-seq="1">
                        ditopamungkas
                    </td>
                    <td class="w0" data-col-seq="2">
                        08/10/2022
                    </td>
                    <td class="w0" data-col-seq="1">
                        Lab AI
                    </td>
                    <td class="w0" data-col-seq="4">08:00 WIB</td>
                    <td class="w0" data-col-seq="4">15:00 WIB</td>
                    <td class="w0" data-col-seq="4" style="white-space: pre-line;
                    ">Deleted 09/10/2022 12:00 WIB</td>
                    <td>
                        <button
                            type="button"
                            class="btn btn-warning"
                        >
                            <i class='bx bxs-comment-edit'></i>
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
                            })();"
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