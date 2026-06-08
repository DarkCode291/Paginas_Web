<?php
namespace App\Controllers;

use App\Models\MenuItem;

class HomeController
{
    public function index(): void
    {
        $menuGroups = MenuItem::grouped();
        $flash = $_SESSION['flash'] ?? null;
        unset($_SESSION['flash']);
        require __DIR__ . '/../Views/home/index.php';
    }
}
