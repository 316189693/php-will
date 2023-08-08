<?php
namespace App\Jobs\Processor;
use App\Models\Podcast;
use Illuminate\Support\Facades\Log;
class AudioProccessor
{
    public function handle(Podcast $podcast): void
    {
        Log::error('Processing podcast: ' . $podcast->id);

    }
}
?>
