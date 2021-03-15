<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ArtikelDeleteEvent;
use App\Models\Artikel;
use File;
use Str;

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
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            $data = base64_decode($data);
            $image_name= "/uploads/img/artikel/".$k;
            $path = public_path().$image_name;

            dd(file_get_contents($path, $data));
            
            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
            
        }

        $content = $dom->saveHTML();
        return $content;
    }
}
