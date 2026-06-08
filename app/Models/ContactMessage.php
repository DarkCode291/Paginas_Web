<?php
namespace App\Models;

class ContactMessage
{
    public static function create(array $data): bool
    {
        $pdo = Database::getConnection();
        if (!$pdo) {
            return false;
        }

        $sql = 'INSERT INTO contact_messages (name, email, subject, message)
                VALUES (:name, :email, :subject, :message)';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':subject' => $data['subject'],
            ':message' => $data['message'],
        ]);
    }
}
