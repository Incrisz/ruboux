<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Banners;
use Symfony\Component\Process\Process;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index', [
            'productcount' => Products::count(),
            'bannercount' => Banners::count()
        ]);
    }
    
    public function pull()
    {
        // Execute the git pull command
        $process = new Process(['git', 'pull']);
        $process = new Process(['php', 'artisan', 'cache:clear']);

        $process->run();

        if ($process->isSuccessful()) {
            return 'Git pull completed successfully.';
        } else {
            return 'Error running git pull: ' . $process->getErrorOutput();
        }
    }
}
