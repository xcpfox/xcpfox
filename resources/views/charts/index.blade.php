@extends('layouts.app')

@section('title', 'Counterparty Charts')
@section('canonical', url(route('charts.index')))
@section('description', 'Get the price, market cap, and volume of Counterparty XCP, as well as, other charts specific to network usage.')

@section('content')
<div class="container mt-1">
    @include('layouts.ads')
    <a href="{{ url(route('home')) }}" class="d-none d-sm-inline btn btn-outline-primary mt-1 float-right">Home</a>
    <h1>Counterparty Charts</h1>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Supply Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.xcpSupply')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-xcp-supply.png') }}" alt="Counterparty XCP Supply Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.xcpSupply')) }}">
                                    XCP Supply
                                </a>
                            </h5>
                            <p class="card-text">The total circulating supply of XCP goes down overtime due to its use as a gas.</p>
                            <a href="{{ url(route('charts.xcpSupply')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.gasFees')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-gas-fees.png') }}" alt="Counterparty Gas Fees Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.gasFees')) }}">
                                    Gas Fees
                                </a>
                            </h5>
                            <p class="card-text">Contract execution gas burned while registering assets and paying dividends.</p>
                            <a href="{{ url(route('charts.gasFees')) }}" class="btn btn-primary">XCP</a>
                            <a href="{{ url(route('charts.gasFees', ['currency' => 'USD'])) }}" class="btn btn-primary">USD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Burn Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.btcBurned')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-bitcoin-burned.png') }}" alt="Bitcoin Burned Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.btcBurned')) }}">
                                    BTC Burned
                                </a>
                            </h5>
                            <p class="card-text">Around 2,125 BTC were burned in order to "mine" the native currency called XCP.</p>
                            <a href="{{ url(route('charts.btcBurned')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.areaRange.burnRate')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-burn-rate.png') }}" alt="Counterparty Burn Rate Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.areaRange.burnRate')) }}">
                                    Avg. Burn Rate
                                </a>
                            </h5>
                            <p class="card-text">Up to 1 BTC could be burned in exchange for 1000 to 1500 XCP during the burn in 2014.</p>
                            <a href="{{ url(route('charts.areaRange.burnRate')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Transaction Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.transactions')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-transactions.png') }}" alt="Total Transactions Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.transactions')) }}">
                                    Transactions Per Day
                                </a>
                            </h5>
                            <p class="card-text">Chart showing number of confirmed bitcoin transactions using Counterparty.</p>
                            <a href="{{ url(route('charts.transactions')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.pie.transactions')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-transaction-types.png') }}" alt="Transaction Types Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.pie.transactions')) }}">
                                    Transaction Types
                                </a>
                            </h5>
                            <p class="card-text">Breakdown of the types of transactions written to the Bitcoin blockchain.</p>
                            <a href="{{ url(route('charts.pie.transactions')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Message Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.messages')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-messages.png') }}" alt="Total Messages Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.messages')) }}">
                                    Messages Per Day
                                </a>
                            </h5>
                            <p class="card-text">Chart showing total messages or "operations" processed by federated nodes.</p>
                            <a href="{{ url(route('charts.messages')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.pie.messages')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-message-categories.png') }}" alt="Message Use Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.pie.messages')) }}">
                                    Message Categories
                                </a>
                            </h5>
                            <p class="card-text">Breakdown of protocol messages processed by federated nodes.</p>
                            <a href="{{ url(route('charts.pie.messages')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Fee Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.averageFee')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-average-fee.png') }}" alt="Average Counterparty Fee Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.averageFee')) }}">
                                    Average Fee
                                </a>
                            </h5>
                            <p class="card-text">Chart of the average transaction fee paid by a Counterparty user.</p>
                            <a href="{{ url(route('charts.averageFee')) }}" class="btn btn-primary">BTC</a>
                            <a href="{{ url(route('charts.averageFee', ['currency' => 'USD'])) }}" class="btn btn-primary">USD</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.fees')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-transaction-fees.png') }}" alt="Total Counterparty Fees Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.fees')) }}">
                                    Total Fees
                                </a>
                            </h5>
                            <p class="card-text">Chart of total transaction fees paid by all Counterparty users across the network.</p>
                            <a href="{{ url(route('charts.fees')) }}" class="btn btn-primary">BTC</a>
                            <a href="{{ url(route('charts.fees', ['currency' => 'USD'])) }}" class="btn btn-primary">USD</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Fee Rate Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.areaRange.feeRate')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-average-fee-rate.png') }}" alt="Average Counterparty Fee Rate Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.areaRange.feeRate')) }}">
                                    Avg. Fee Rate
                                </a>
                            </h5>
                            <p class="card-text">Chart of the average fee rate paid by a Counterparty user (satoshis per byte.)</p>
                            <a href="{{ url(route('charts.areaRange.feeRate')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.feeRates')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-fee-rates.png') }}" alt="Counterparty Fee Rates Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.feeRates')) }}">
                                    Fee Rates Paid
                                </a>
                            </h5>
                            <p class="card-text">A closer look at the fee rates paid by Counterparty users over the last 24 hours.</p>
                            <a href="{{ url(route('charts.feeRates')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Size Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.areaRange.transactionSize')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-average-transaction-size.png') }}" alt="Average Transacation Size Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.areaRange.transactionSize')) }}">
                                    Average Tx Size
                                </a>
                            </h5>
                            <p class="card-text">Chart of the average size, in bytes, of a Counterparty transaction.</p>
                            <a href="{{ url(route('charts.areaRange.transactionSize')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.transactionSize')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-transaction-size.png') }}" alt="Total Transaction Data Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.transactionSize')) }}">
                                    Total Tx Data
                                </a>
                            </h5>
                            <p class="card-text">Chart of the total amount of block space used by Counterparty transactions.</p>
                            <a href="{{ url(route('charts.transactionSize')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Block Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.blockShare')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-block-share.png') }}" alt="Counterparty Block Share Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.blockShare')) }}">
                                    Block Share
                                </a>
                            </h5>
                            <p class="card-text">What percent of Bitcoin transactions are Counterparty transactions per month.</p>
                            <a href="{{ url(route('charts.blockShare')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.pie.blocks')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-block-presence.png') }}" alt="Counterparty Block Presence Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.pie.blocks')) }}">
                                    Block Presence
                                </a>
                            </h5>
                            <p class="card-text">What percent of Bitcoin blocks have contained Counterparty transactions since launch.</p>
                            <a href="{{ url(route('charts.pie.blocks')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Asset Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.assets')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-new-assets.png') }}" alt="New Assets Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.assets')) }}">
                                    New Assets
                                </a>
                            </h5>
                            <p class="card-text">New Counterparty asset registrations shown per day, per month, and per year.</p>
                            <a href="{{ url(route('charts.assets')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.activeAssets')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-active-assets.png') }}" alt="Active Assets Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.activeAssets')) }}">
                                    Active Assets
                                </a>
                            </h5>
                            <p class="card-text">Active assets, based on whether any holders had a change in their balance.</p>
                            <a href="{{ url(route('charts.activeAssets')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.registrationFee')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-registration-fee.png') }}" alt="Average Registration Fee Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.registrationFee')) }}">
                                    Registration Fee
                                </a>
                            </h5>
                            <p class="card-text">Average registration fee paid by asset issuers to create an asset of any type.</p>
                            <a href="{{ url(route('charts.registrationFee')) }}" class="btn btn-primary">XCP</a>
                            <a href="{{ url(route('charts.registrationFee', ['currency' => 'USD'])) }}" class="btn btn-primary">USD</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.pie.assets')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-asset-types.png') }}" alt="Counterparty Asset Types Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.pie.assets')) }}">
                                    Asset Types
                                </a>
                            </h5>
                            <p class="card-text">Breakdown of the types of assets that users register: asset, subasset, or numeric.</p>
                            <a href="{{ url(route('charts.pie.assets')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Address Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.addresses')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-new-addresses.png') }}" alt="New Addresses Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.addresses')) }}">
                                    New Addresses
                                </a>
                            </h5>
                            <p class="card-text">New addresses, based on their first time seen using Counterparty.</p>
                            <a href="{{ url(route('charts.addresses')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.activeAddresses')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-active-addresses.png') }}" alt="Active Addresses Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.activeAddresses')) }}">
                                    Active Addresses
                                </a>
                            </h5>
                            <p class="card-text">Active addresses, based on whether they had any balance changes during period.</p>
                            <a href="{{ url(route('charts.activeAddresses')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.hodlAddresses')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-hodl-addresses.png') }}" alt="Counterparty Hodl Addresses Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.hodlAddresses')) }}">
                                    Hodl Addresses
                                </a>
                            </h5>
                            <p class="card-text">Hodl addresses are addresses which have received tokens but never-ever spent them.</p>
                            <a href="{{ url(route('charts.hodlAddresses')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.pie.addresses')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-address-types.png') }}" alt="Counterparty Address Types Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.pie.addresses')) }}">
                                    Address Types
                                </a>
                            </h5>
                            <p class="card-text">Breakdown of the types of addresses that users use: P2PKH, P2SH, Multisig.</p>
                            <a href="{{ url(route('charts.pie.addresses')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3 class="text-center mt-4">Send Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.sends')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-asset-sends.png') }}" alt="Asset Sends Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.sends')) }}">
                                    Sends Per Day
                                </a>
                            </h5>
                            <p class="card-text">Total number of asset sends made, shown per day, per month, and per year.</p>
                            <a href="{{ url(route('charts.sends')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.mostSends')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-most-sends.png') }}" alt="Most Sends Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.mostSends')) }}">
                                    Most Sends
                                </a>
                            </h5>
                            <p class="card-text">A look at the Top 20 most sent Counterparty assets of all time. Guess what? It's not XCP!</p>
                            <a href="{{ url(route('charts.mostSends')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-4">Order Data</h3>
            <div class="row">
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.orders')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-dex-orders.png') }}" alt="Total Orders Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.orders')) }}">
                                    Orders Per Day
                                </a>
                            </h5>
                            <p class="card-text">Total number of dex orders placed, shown per day, per month, and per year.</p>
                            <a href="{{ url(route('charts.orders')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
                <div class="col-6 mt-4">
                    <div class="card text-center">
                        <a href="{{ url(route('charts.areaRange.orderExpiration')) }}">
                            <img class="card-img-top" src="{{ asset('/images/counterparty-average-order-expiration.png') }}" alt="Total Orders Chart" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">
                                <a href="{{ url(route('charts.areaRange.orderExpiration')) }}">
                                    Avg. Order Expiration
                                </a>
                            </h5>
                            <p class="card-text">The average order duration selected by traders when placing dex orders.</p>
                            <a href="{{ url(route('charts.areaRange.orderExpiration')) }}" class="btn btn-primary">View Chart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="alert alert-warning mt-5 mb-0">
        <b>Notice:</b> The thumbnails shown on this page are <b>not</b> automatically generated. Please, click through to the actual charts and do not rely on the thumbnails alone, as they won't reflect the most recent data. When this message no longer appears on this page, the issue will have been addressed. Thank you!
    </div>
    @include('layouts.cta')
</div>
@endsection