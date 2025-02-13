<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate a new sitemap for the website based on defined routes';

    public function handle()
    {
        $this->info('Generating sitemap...');

        // Ambil semua route yang bisa diakses secara publik
        $sitemap = Sitemap::create();

        foreach (Route::getRoutes() as $route) {
            if ($route->methods()[0] === 'GET' && $route->uri() !== 'sanctum/csrf-cookie') {
                $sitemap->add(Url::create('/' . ltrim($route->uri(), '/')));
            }
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap successfully generated!');
    }
}
