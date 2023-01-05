<?php

namespace piece601\LaravelSqsFifoQueue\Tests\Fakes;

use piece601\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;

class Job
{
    use SqsFifoQueueable;
}
