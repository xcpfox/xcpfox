@extends('layouts.app')

@section('title', 'Counterparty (XCP) Block Explorer')
@section('canonical', url(route('home')))
@section('description', 'View detailed information and charts on Counterparty transactions and Bitcoin blocks containing them.')

@section('content')
<div class="container mt-1">
    @include('layouts.ads')
    <div class="row">
        <div class="col-md-6 col-lg-8 d-none d-md-inline">
            <h1>XCP FOX <small class="lead">Block Explorer</small></h1>
        </div>
        <div class="col-md-6 col-lg-4 text-center">
            <div class="row">
                <div class="col-4">
                    Market&nbsp;Cap <br /> <b>{{ $market_data['market_cap'] }}</b>
                </div>
                <div class="col-4">
                    Last Price <br /> <b>{{ $market_data['price'] }}</b>
                </div>
                <div class="col-4">
                    Volume <small class="text-muted">24h</small> <br /> <b>{{ $market_data['volume'] }}</b>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-1">
        <div class="col-lg-8 mt-4 mb-3">
            <chart-market
                source="https://coincap.io/history/XCP"
                title="XCP Charts"
            >
            </chart-market>
            <p class="text-center text-muted mt-2">Welcome to XCP FOX, a Counterparty block explorer.</p>
            <p class="text-center card-text mt-4">
                <a href="https://t.me/xcpfox" class="btn btn-lg btn-outline-success d-inline d-md-none">
                    <i class="fa fa-telegram"></i> Join our Telegram
                </a>
            </p>
        </div>
        <div class="col-lg-4 my-4">
            <h1 class="d-block d-md-none mb-4">XCP FOX <small class="lead">Block Explorer</small></h1>
            <statistics></statistics>
        </div>
    </div>
    <transactions page="1" per_page="10"></transactions>
</div>
@endsection