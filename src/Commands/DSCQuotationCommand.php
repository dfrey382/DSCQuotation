<?php

namespace Dsc\DSCQuotation\Commands;

use Illuminate\Console\Command;

class DSCQuotationCommand extends Command
{
    public $signature = 'dscquotation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
