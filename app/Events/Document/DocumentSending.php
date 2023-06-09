<?php

namespace App\Events\Document;

use App\Abstracts\Event;

class DocumentSending extends Event
{
    public $document;

    /**
     * Create a new event instance.
     *
     * @param $document
     */
    public function __construct($document)
    {
        $this->document = $document;
    }
}
