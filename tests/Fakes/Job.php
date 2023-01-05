<?php

namespace piece601\LaravelSqsFifoQueue\Tests\Fakes;

use ShiftOneLabs\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;

class Job
{
    use SqsFifoQueueable;
}
