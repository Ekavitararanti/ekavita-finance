@extends('landingpage.layout.index')
@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center" style="margin-top: 50px;">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="fade-up">
        <h2><span>Riwayat Gaji</span></h2>
    </div>
</section>
<section class="page-section bg-light" id="contact">
    <div class="container shadow p-3 mb-5 bg-body rounded" data-aos="fade-up">

        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered table-light" style="vertical-align: middle">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Slip Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataGaji as $key => $item)
                    <tr>
                        <th>{{ $no++ }}.</th>
                        <td>{{ \Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('LLL') }}</td>
                        <td>{{ $formatted_dataGaji[$key] }}</td>
                        <td>
                            <a href="{{ url('/cetak-slip/' . $item->id_gaji_karyawan) }}" target="_blank" class="btn btn-info"><b>Lihat Slip Gaji</b></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</section>
@endsection