<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class TransactionResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'tx_index' => number_format($this->tx_index),
            'block_index' => number_format($this->block_index),
            'message_index' => number_format($this->message_index),
            'type' => getTitleFromType($this->type),
            'category' => $this->type,
            'tx_hash' => $this->tx_hash,
            'source' => $this->source,
            'destination' => $this->destination,
            'fee' => $this->fee,
            'fee_usd' => '$' . number_format($this->fee_usd_normalized, 2),
            'fee_rate' => round($this->fee / $this->vsize),
            'size' => $this->size,
            'vsize' => $this->vsize,
            'valid' => $this->valid,
            'block_time' => $this->confirmed_at,
            'block_time_ago' => $this->confirmed_at->diffForHumans(),
            'block_url' => $this->block_url,
            'source_url' => $this->source_url,
            'destination_url' => $this->destination_url,
            'url' => $this->url,
            'related' => $this->relatedModel,
        ];
    }
}
