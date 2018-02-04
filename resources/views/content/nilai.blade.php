@extends('layout')

@section('heading')
  Nilai
@endsection

@section('content')
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Condensed Full Width Table</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
      <table class="table table-condensed">
        <tr>
          <th style="width: 3%">#</th>
          <th style="width: 12%">NIM</th>
          <th style="width: 25%">Nama</th>
          <th style="width: 10%">Absensi</th>
          <th style="width: 10%">Tugas</th>
          <th style="width: 10%">Uts</th>
          <th style="width: 10%">Uas</th>
          <th style="width: 10%">Nilai akhir</th>
          <th style="width: 10%">Option</th>
        </tr>
        @php $no = 1 @endphp
        @foreach((array) $list as $item)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $item["nim"] }}</td>
          <td>{{ $item["nama"] }}</td>
          <td>{{ $item["absensi"] }}</td>
          <td>{{ $item["tugas"] }}</td>
          <td>{{ $item["uts"] }}</td>
          <td>{{ $item["uas"] }}</td>
          <td>{{ $item["nilai_akhir"] }} <span style="color:#00a65a;font-weight:500">({{ $item["grade"] }})</span></td>
          <td>
            <button type="button" class="btn btn-sm btn-success btn-modal" data-alamat="" 
              data-ta="" data-toggle="modal" data-target="#modal-detail">Detail</button>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection
@section('script')
@endsection