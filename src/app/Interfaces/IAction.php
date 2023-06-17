<?php declare(strict_types = 1);

namespace App\Interfaces;

interface IAction {
    public function handle(): array;
}
