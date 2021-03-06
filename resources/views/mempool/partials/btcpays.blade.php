<div class="row mb-2">
    <div class="col-md-3 font-weight-bold">Amount:</div>
    <div class="col-md-9">{{ fromSatoshi($tx_data->btc_amount)}} <a href="{{ url(route('assets.show', ['asset' => 'BTC'])) }}">BTC</a></div>
</div>
<div class="row mb-2">
    <div class="col-md-3 font-weight-bold">Source:</div>
    <div class="col-md-9"><a href="{{ url(route('addresses.show', ['address' => $tx_data->source])) }}">{{ $tx_data->source }}</a></div>
</div>
<div class="row mb-2">
    <div class="col-md-3 font-weight-bold">Destination:</div>
    <div class="col-md-9"><a href="{{ url(route('addresses.show', ['address' => $tx_data->destination])) }}">{{ $tx_data->destination }}</a></div>
</div>
@foreach(explode('_', $tx_data->order_match_id) as $order_match)
<div class="row mb-2">
    <div class="col-md-3 font-weight-bold">Order Match #{{ $loop->iteration }}:</div>
    <div class="col-md-9"><a href="{{ url(route('transactions.show', ['tx_hash' => $order_match])) }}">{{ $order_match }}</a></div>
</div>
@endforeach