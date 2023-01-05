<?php

namespace Piece601\LaravelSqsFifoQueue\Tests\Fakes;

use Piece601\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;

class Job
{
    use SqsFifoQueueable;
}
