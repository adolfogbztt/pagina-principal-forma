<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Tags\Url;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = Sitemap::create()
            ->add(env('APP_URL'));

        $routes = Route::getRoutes();

        $paginas_ignoradas = ['_ignition/health-check', '_ignition/execute-solution', '_ignition/update-config', 'up', '/'];

        foreach ($routes as $route) {

            // Verificar si la URI está en la lista de páginas ignoradas
            if (in_array($route->uri(), $paginas_ignoradas)) {
                continue; // Saltar a la siguiente iteración del bucle
            }
            $sitemap->add(env('APP_URL') . '/' . $route->uri());
        }

        $sitemap->writeToFile(public_path('sitemap.xml'));

    }
}
