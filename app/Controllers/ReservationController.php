<?php
namespace App\Controllers;

use App\Models\Reservation;

class ReservationController
{
    public function store(): void
    {
        $data = [
            'name' => trim($_POST['name'] ?? ''),
            'phone' => trim($_POST['phone'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'people' => (int)($_POST['people'] ?? 0),
            'date' => trim($_POST['date'] ?? ''),
            'time' => trim($_POST['time'] ?? ''),
            'message' => trim($_POST['message'] ?? ''),
        ];

        if (!$data['name'] || !$data['phone'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || $data['people'] < 1 || !$data['date'] || !$data['time']) {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Por favor completa correctamente todos los campos obligatorios de la reserva.'];
            header('Location: index.php#book-a-table');
            exit;
        }

        $saved = Reservation::create($data);
        $_SESSION['flash'] = $saved
            ? ['type' => 'success', 'message' => 'Reserva registrada correctamente. El restaurante se comunicará para confirmar.']
            : ['type' => 'warning', 'message' => 'La página funciona, pero no se pudo guardar porque la base de datos no está conectada o importada.'];
        header('Location: index.php#book-a-table');
        exit;
    }
}
