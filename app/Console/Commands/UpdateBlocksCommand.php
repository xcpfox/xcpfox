<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateBlocksCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:blocks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update Blocks';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $block = \App\Block::orderBy('block_index', 'desc')->first();

        $first_block = $block ? $block->block_index : 278319;

        if(\Cache::get('block_height') - $first_block < 100)
        {
            \App\Jobs\UpdateBlocks::dispatch($first_block, \Cache::get('block_height'))->onQueue('high');
        }
        else
        {
            \App\Jobs\UpdateBlocks::dispatch($first_block, $first_block + 10)->onQueue('high');
        }
    }
}