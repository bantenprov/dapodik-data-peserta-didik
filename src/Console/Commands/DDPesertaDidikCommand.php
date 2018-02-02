<?php namespace Bantenprov\DDPesertaDidik\Console\Commands;

use Illuminate\Console\Command;

/**
 * The DDPesertaDidikCommand class.
 *
 * @package Bantenprov\DDPesertaDidik
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class DDPesertaDidikCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:dd-peserta-didik';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\DDPesertaDidik package';

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
        $this->info('Welcome to command for Bantenprov\DDPesertaDidik package');
    }
}
