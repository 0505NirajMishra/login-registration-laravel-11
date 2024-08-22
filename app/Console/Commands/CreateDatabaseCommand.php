<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $dbName = $this->argument('name');

        try {
            DB::statement("CREATE DATABASE {$dbName}");
            $this->info("Database '{$dbName}' created successfully.");
        } catch (\Exception $e) {
            $this->error("Failed to create database '{$dbName}'. Error: " . $e->getMessage());
        }
    }
}
