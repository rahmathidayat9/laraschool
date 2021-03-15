<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ArtikelDeleteEvent;
use App\Models\Artikel;
use File;
use Str;
use DomDocument;

class ArtikelDeleteListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ArtikelDeleteEvent $event)
    {
        $artikel = $event->artikel;
        
        File::delete(public_path('uploads/img/artikel/'.$artikel->thumbnail));
        
        $content = $artikel->deskripsi;
        $dom = new DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $img){
            $data = $img->getAttribute('src'); 
            File::delete(public_path($data));
        }
    }
}