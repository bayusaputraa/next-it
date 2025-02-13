<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    /**
     * Generate sitemap dynamically.
     */
    public function generate()
    {
        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));

        return response()->json(['message' => 'Sitemap berhasil dibuat!']);
    }

    /**
     * Show sitemap file.
     */
    public function show()
    {
        $path = public_path('sitemap.xml');

        if (!file_exists($path)) {
            return response()->json(['error' => 'Sitemap tidak ditemukan'], 404);
        }

        return response()->file($path, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
