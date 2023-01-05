<?php

namespace Piece601\LaravelSqsFifoQueue\Tests\Fakes;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Piece601\LaravelSqsFifoQueue\Bus\SqsFifoQueueable;

class Mail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels, SqsFifoQueueable;

    //
}
