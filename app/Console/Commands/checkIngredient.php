<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class checkIngredient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:ingredient';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'check all empty ingredients and add 4 stock';

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
        try{
            DB::table('ingredients')
            ->where('stock', 0)->increment('stock', 4);
            $this->info("check all empty ingredients and add 4 stock");
        } catch (\Exception $e) {
            print($e->getMessage());
        }
    }
}
