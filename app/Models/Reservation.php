<?php
namespace App\Models;

class Reservation
{
    public static function create(array $data): bool
    {
        $pdo = Database::getConnection();
        if (!$pdo) {
            return false;
        }

        $sql = 'INSERT INTO reservations (name, phone, email, people, reservation_date, reservation_time, message)
                VALUES (:name, :phone, :email, :people, :reservation_date, :reservation_time, :message)';
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':people' => $data['people'],
            ':reservation_date' => $data['date'],
            ':reservation_time' => $data['time'],
            ':message' => $data['message'] ?? null,
        ]);
    }
}
