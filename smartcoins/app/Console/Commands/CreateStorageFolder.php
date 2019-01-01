<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CreateStorageFolder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eastpac:create-storage-folder {disk} {pathname} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command will create a folder on storage folder and then create symbolic link on public folder';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $path = $this->argument('pathname');

        if (file_exists(public_path($path))) {
            return $this->error('The "public/'.$path.'" directory already exists.');
        }
        Storage::disk($this->argument('disk'))->makeDirectory($path);


        $this->laravel->make('files')->link(
            //storage_path('app/'. $path), public_path($path)
            storage_path('app/'. $path), public_path($path)
        );

        $this->info('The [public/'.$path.'] directory has been linked.');
       // else
        // if (Storage::disk($this->argument('disk'))->exists($this->argument('foldername')))
        // {
        //     $this->info("Unable to comply : {$this->argument('foldername')} already exists");
        //     return;
        // }

    }
}
