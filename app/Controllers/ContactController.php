<?php
namespace App\Controllers;

use App\Models\ContactMessage;

class ContactController
{
    public function store(): void
    {
        $data = [
            'name' => trim($_POST['name'] ?? ''),
            'email' => trim($_POST['email'] ?? ''),
            'subject' => trim($_POST['subject'] ?? ''),
            'message' => trim($_POST['message'] ?? ''),
        ];

        if (!$data['name'] || !filter_var($data['email'], FILTER_VALIDATE_EMAIL) || !$data['subject'] || !$data['message']) {
            $_SESSION['flash'] = ['type' => 'danger', 'message' => 'Por favor completa correctamente el formulario de contacto.'];
            header('Location: index.php#contact');
            exit;
        }

        $saved = ContactMessage::create($data);
        $_SESSION['flash'] = $saved
            ? ['type' => 'success', 'message' => 'Mensaje enviado y guardado correctamente.']
            : ['type' => 'warning', 'message' => 'La página funciona, pero no se pudo guardar porque la base de datos no está conectada o importada.'];
        header('Location: index.php#contact');
        exit;
    }
}
