@extends('layouts.checkout')
@section('title','checkout')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  Paket Travel
                </li>
                <li class="breadcrumb-item">
                  Detail
                </li>
                <li class="breadcrumb-item active">
                  Checkout
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7 pl-lg-0">
            <div class="card card-details">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
              <h1>Peserta Keberangkatan</h1>
              <p>
                 {{ $item->travel_package->title }}, {{ $item->travel_package->location }}
              </p>
              <div class="attendee">
                <table class="table table-responsive-sm text-center">
                  <thead>
                    <tr>
                      <td>Foto</td>
                      <td>Nama</td>
                      <td>Keberangkatan</td>
                      <td>Tipe Trip</td>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($item->details as $detail)
                        <tr>
                          <td>
                            <img src="https://ui-avatars.com/api/?name={{ $detail->username }}"height="60" class="rounded-circle" />
                          </td>
                          <td class="align-middle">
                            {{ $detail->username }}
                          </td>
                          <td class="align-middle">
                            {{ $detail->departure }}                         
                          </td>
                          <td class="align-middle">
                            {{ $detail->tipe_trip }}                         
                          </td>
                          <td class="align_middle">
                            <a href="{{ route('checkout-remove', $detail->id) }}">
                              <img src="{{ url('frontend/images/ic_remove.png') }}"alt="" />
                            </a>
                          </td>
                        </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center">
                            Kosong
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <div class="member mt-3">
                <h2>Tambah Anggota</h2>
                <form action="{{ route('checkout-create', $item->id) }}" class="form-inline" method="POST">
                  @csrf
                  <label for="username" class="sr-only">Name</label>
                  <input 
                    type="text"
                    name="username" 
                    class="form-control mb-2 mr-sm-2" 
                    id="username" 
                    required
                    placeholder="nama"
                  />

                  <label for="departure" class="sr-only">departure</label>
                  <input 
                    type="text"
                    name="departure" 
                    class="form-control mb-2 mr-sm-2" 
                    style="width: 150px"
                    id="departure" 
                    required
                    placeholder="Keberangkatan"
                  />
                  
                  <label for="tipe_trip" class="sr-only">Tipe_trip</label>
                  <input 
                    type="text"
                    name="tipe_trip" 
                    class="form-control mb-2 mr-sm-2" 
                    style="width: 150px"
                    id="tipe_trip" 
                    required
                    placeholder="Tipe_trip"
                  />
                  <button type="submit" class="btn btn-add-now mb-2 px-4">
                    Tambahkan
                  </button>
                </form>
                <h3 class="mt-2 mb-0">Pesan</h3>
                <p class="disclaimer mb-0">
                  Kamu hanya bisa menambahkan anggota yang sudah registrasi.
                </p>
              </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card card-details card-right">
        
            <h2>Checkout Informasi</h2>
            <table class="trip-informations">
              <tr>
                <th width="50%">Anggota</th>
                <td width="50%" class="text-right">
                  {{ $item->details->count() }} Orang
                </td>
              </tr>
              <tr>
              </tr>
              <tr>
                <th width="50%">Harga Trip</th>
                <td width="50%" class="text-right">
                  Rp. {{ $item->travel_package->price }},00 / Orang
                </td>
              </tr>
              <tr>
                <th width="50%">Total</th>
                <td width="50%" class="text-right">
                  Rp. {{ $item->transaction_total }},00
                </td>
              </tr>
              <tr>
                <th width="50%">Total (+Unik kode)</th>
                <td width="50%" class="text-right text-total">
                  <span class="text-blue">Rp. {{ $item->transaction_total }},</span>
                  <span class="text-orange">{{ mt_rand(0,99) }}</span>
                </td>
              </tr>
            </table>
            <hr />
            <h2>Petunjuk Pembayaran</h2>
            <p class="payment-instruction">
              Tolong selesaikan pembayaran anda untuk melanjutkan perjalanan yang luar biasa
            </p>
            <div class="bank">
              <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                <div class="description">
                  <h3>PT Iskandaria</h3>
                  <p>
                    0881 8829 8800
                    <br>
                    Bank Central Asia
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="bank-item pb-3">
                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                <div class="description">
                  <h3>PT Iskandaria</h3>
                  <p>
                    0899 8501 7888
                    <br>
                    Bank HSBC
                  </p>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="join-container">
            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join-now mt-3 py-2">
              Konfirmasi Pembayaran</a>
          </div>
          <div class="text-center mt-3">
            <a href="{{ route('paket-travel') }}" class="text-muted">
              Batalkan Pemesanan
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
        $(document).ready(function() {
        $('.datepicker').datepicker({
          format: 'yyyy-dd-mm',
        uiLibrary: 'bootstrap4',
        icon: {
        rigthIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
        }
    })
});
</script>
@endpush