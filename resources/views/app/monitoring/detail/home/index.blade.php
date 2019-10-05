@extends('layout.app')

@section('title', 'User '.$data['name'])
@section('bodyClass', 'fixed-header menu-pin menu-behind')

@section('content')
    <div class="jumbotron jumbotron m-b-0" data-pages="parallax">
        <div class="container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/user') }}">User</a></li>
                    <li class="breadcrumb-item active">Detail #{{ $data['name'] }}</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid container-fixed-lg">
        <div class="card card-default m-t-20">
            <div class="card-body">
                <div class="invoice padding-50 sm-padding-10">
                    <div>
                        <div class="pull-left">
                            <h2 class="font-montserrat all-caps hint-text">{{ $data['name'] }}</h2>
                            <address class="m-t-10">
                                Username: {{ $data['username'] }}<br>
                                Email: {{ $data['email'] }}<br>
                            </address>
                        </div>
                        <div class="pull-right sm-m-t-20">
                            <h2 class="font-montserrat all-caps hint-text">{{ $data['position']['name'] }}</h2>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <br>
                    <br>
                    {{-- <div class="col-12">
                        <div class="row">
                            <div class="col-lg-9 col-sm-height sm-no-padding">
                                <p class="small no-margin">Invoice to</p>
                                <h5 class="semi-bold m-t-0">Darren Forthway</h5>
                                <address>
                                    <strong>Pages Incoperated.</strong>
                                    <br>page.inc
                                    <br>
                                    1600 Amphitheatre Pkwy, Mountain View,<br>
                                    CA 94043, United States
                                </address>
                            </div>
                            <div class="col-lg-3 sm-no-padding sm-p-b-20 d-flex align-items-end justify-content-between">
                                <div>
                                    <div class="font-montserrat bold all-caps">Invoice No :</div>
                                    <div class="font-montserrat bold all-caps">Invoice date :</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="text-right">
                                    <div class="">0047</div>
                                    <div class="">29/09/14</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="table-responsive table-invoice">
                        <table class="table m-t-50">
                            <thead>
                                <tr>
                                    <th class="">Task Description</th>
                                    <th class="text-center">Rate</th>
                                    <th class="text-center">Hours</th>
                                    <th class="text-right">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="">
                                        <p class="text-black">Character Illustration</p>
                                        <p class="small hint-text">
                                            Character Design projects from the latest top online portfolios on Behance.
                                        </p>
                                    </td>
                                    <td class="text-center">$65.00</td>
                                    <td class="text-center">84</td>
                                    <td class="text-right">$5,376.00</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <p class="text-black">Cross Heart Charity Branding</p>
                                        <p class="small hint-text">
                                            Attempt to attach higher credibility to a new product by associating it with a well established company name
                                        </p>
                                    </td>
                                    <td class="text-center">$89.00</td>
                                    <td class="text-center">100</td>
                                    <td class="text-right">$8,900.00</td>
                                </tr>
                                <tr>
                                    <td class="">
                                        <p class="text-black">iOs App</p>
                                        <p class="small hint-text">
                                            A video game franchise Inspired primarily by a sketch of stylized wingless - Including Branding / Graphics / Motion Picture &amp; Videos
                                        </p>
                                    </td>
                                    <td class="text-center">$100.00</td>
                                    <td class="text-center">500</td>
                                    <td class="text-right">$50,000.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    {{-- <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div>
                        <img width="150" height="58" alt="" class="invoice-signature" data-src-retina="assets/img/invoice/signature2x.png" data-src="assets/img/invoice/signature.png" src="assets/img/invoice/signature2x.png">
                        <p>Designer’s Identity</p>
                    </div>
                    <br>
                    <br>
                    <div class="p-l-15 p-r-15">
                        <div class="row b-a b-grey">
                            <div class="col-md-2 p-l-15 sm-p-t-15 clearfix sm-p-b-15 d-flex flex-column justify-content-center">
                                <h5 class="font-montserrat all-caps small no-margin hint-text bold">Advance</h5>
                                <h3 class="no-margin">$21,000.00</h3>
                            </div>
                            <div class="col-md-5 clearfix sm-p-b-15 d-flex flex-column justify-content-center">
                                <h5 class="font-montserrat all-caps small no-margin hint-text bold">Discount (10%)</h5>
                                <h3 class="no-margin">$645.00</h3>
                            </div>
                            <div class="col-md-5 text-right bg-master-darker col-sm-height padding-15 d-flex flex-column justify-content-center align-items-end">
                                <h5 class="font-montserrat all-caps small no-margin hint-text text-white bold">Total</h5>
                                <h1 class="no-margin text-white">$64,276.00</h1>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <p class="small hint-text">Services will be invoiced in accordance with the Service Description. You must pay all undisputed invoices in full within 30 days of the invoice date, unless otherwise specified under the Special Terms and Conditions. All payments must reference the invoice number. Unless otherwise specified, all invoices shall be paid in the currency of the invoice</p>
                    <p class="small hint-text">Insight retains the right to decline to extend credit and to require that the applicable purchase price be paid prior to performance of Services based on changes in insight's credit policies or your financial condition and/or payment record. Insight reserves the right to charge interest of 1.5% per month or the maximum allowable by applicable law, whichever is less, for any undisputed past due invoices. You are responsible for all costs of collection, including reasonable attorneys' fees, for any payment default on undisputed invoices. In addition, Insight may terminate all further work if payment is not received in a timely manner.</p>
                    <br>
                    <hr>
                    <div>
                        <img src="/assets/img/logo.png" alt="logo" data-src="/assets/img/logo.png" data-src-retina="/assets/img/logo_2x.png" width="78" height="22">
                        <span class="m-l-70 text-black sm-pull-right">+34 346 4546 445</span>
                        <span class="m-l-40 text-black sm-pull-right">support@revox.io</span>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <a href="{{ url('/user/'.$data['id'].'/blast/whatsapp/phone_number') }}">
                <div class="col-lg-6 sm-no-padding">
                    <div class="card card-transparent">
                        <div class="card-body no-padding">
                            <div class="card card-default">
                                <div class="card-header  ">
                                    <div class="card-title">Portlet Title
                                    </div>
                                    <div class="card-controls">
                                        <ul>
                                            <li><a href="#" class="card-refresh" data-toggle="refresh"><i
                                                class="card-icon card-icon-refresh-lg-master"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h3><span class="semi-bold">BLAST PHONE NUMBER LIST</span></h3>
                                    <p class="text-black">Click this to see {{ $data['name'] }} blast list</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection

@section('script')
    @include('app.user.detail.home.scripts.index')
@endsection
