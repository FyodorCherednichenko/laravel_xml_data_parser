<?php

namespace App\Console\Commands;

use App\Actions\ParserAction;
use Illuminate\Console\Command;

class parser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parser {file_path=./public/data/data_light.xml}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @param ParserAction $action
     * @return int
     */
    public function handle(ParserAction $action): int
    {
        $action->execute($this->argument('file_path'));

        return 0;
    }
}
