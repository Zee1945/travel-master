@extends('layouts.checkout')

@section('title','Checkout Travel')
@push('prepend-style')
<link rel="stylesheet" href="{{url('frontend/lib/gijgo/css/gijgo.min.css')}}">
@endpush
@section('content')
<main>
    <section class="section-details-header">
    </section>
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
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>Trip to Gunung Bromo, Malang, Indonesia </p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Name</td>
                                        <td>Nationality</td>
                                        <td>Visa</td>
                                        <td>Passport</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle"
                                                src="{{url('frontend/img/testimonial/testimonial1.jpg')}}" width="100"></td>
                                        <td class="align-middle">
                                            Zul Fachrie
                                        </td>
                                        <td class="align-middle">
                                            CN
                                        </td>
                                        <td class="align-middle">
                                            N/A
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#"> <img src="{{url('frontend/img/icon/ic_delete.png')}}" alt=""
                                                    width="14"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle"
                                                src="{{url('frontend/img/testimonial/testimonial1.jpg')}}" width="100"></td>
                                        <td class="align-middle">
                                            Zeejoe
                                        </td>
                                        <td class="align-middle">
                                            SG
                                        </td>
                                        <td class="align-middle">
                                            30 Days
                                        </td>
                                        <td class="align-middle">
                                            Active
                                        </td>
                                        <td class="align-middle">
                                            <a href="#"> <img src="{{url('frontend/img/icon/ic_delete.png')}}" alt=""
                                                    width="14"></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" name="inputUsername"
                                    id="inputUsername" placeholder="Username">

                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>N/A
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only"></label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input type="text" name="" id="doePassport" class="form-control datepicker"
                                        placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                            </form>
                            <h3 class="mt-2 mb-0">
                                Note
                            </h3>
                            <p class="disclaimer mb-0"> You are only able to invite member that has registered in
                                Nomads</p>
                        </div>



                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">

                        <h2>Checkout Informations</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td class="text-right" width="50%"> 2 Person</td>
                            </tr>
                            <tr>
                                <th width="50%">Additional Visa</th>
                                <td class="text-right" width="50%"> $ 190,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td class="text-right" width="50%"> $ 80,00 / person</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td class="text-right" width="50%"> $ 280,00</td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td class="text-right text-total" width="50%">
                                    <span class="text-blue">$279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr>

                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">Please Complete your payment before continue the wonderful
                            trip</p>

                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/img/icon/ic_card.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>0822 1234 0098
                                        <br>
                                        Bank Negara Indonesia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="{{url('frontend/img/icon/ic_card.png')}}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomads ID</h3>
                                    <p>0822 4123 8484
                                        <br>
                                        Bank Rakyat Indonesia</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-3">
                        <a href="{{route('detail')}}" class="text-muted">Cancel Booking</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('addon-script')
<script src="{{url('frontend/lib/gijgo/js/gijgo.min.js')}}"></script>

<script>
    $(document).ready(function () {

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{url('frontend/img/icon/ic_date.png')}}" width="20">'
            }
        });
    });

</script>
@endpush