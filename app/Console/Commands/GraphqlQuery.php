<?php

namespace App\Console\Commands;

use GraphQL\GraphQL;
use Illuminate\Console\Command;

class GraphqlQuery extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'graphql:query';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $graphql = <<<'GRAPHQL'
{
  test {
    id
  }
}
GRAPHQL;

        $start = microtime(true);
        \Rebing\GraphQL\Support\Facades\GraphQL::query($graphql);
        $end = microtime(true);

        $time = ($end - $start) * 1000;

        echo (int) $time . 'ms' . PHP_EOL;
    }
}
