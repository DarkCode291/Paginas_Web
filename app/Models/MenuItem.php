<?php
namespace App\Models;

class MenuItem
{
    public static function all(): array
    {
        $pdo = Database::getConnection();
        if (!$pdo) {
            return self::fallback();
        }

        $stmt = $pdo->query('SELECT * FROM menu_items WHERE active = 1 ORDER BY category, id');
        $items = $stmt->fetchAll();
        return $items ?: self::fallback();
    }

    public static function grouped(): array
    {
        $grouped = [];
        foreach (self::all() as $item) {
            $grouped[$item['category']][] = $item;
        }
        return $grouped;
    }

    private static function fallback(): array
    {
        return [
            ['name'=>'Entrada de la casa', 'description'=>'Tabla artesanal con panes, salsas y vegetales frescos.', 'price'=>24000, 'category'=>'Entradas', 'image'=>'assets/img/restaurant/starter-3.webp'],
            ['name'=>'Bruschetta Savora', 'description'=>'Pan crocante, tomate, albahaca, aceite de oliva y queso.', 'price'=>22000, 'category'=>'Entradas', 'image'=>'assets/img/restaurant/starter-5.webp'],
            ['name'=>'Pasta cremosa', 'description'=>'Pasta al dente con salsa de la casa y parmesano.', 'price'=>38000, 'category'=>'Platos fuertes', 'image'=>'assets/img/restaurant/main-2.webp'],
            ['name'=>'Filete especial', 'description'=>'Corte seleccionado acompañado de vegetales y papas rústicas.', 'price'=>52000, 'category'=>'Platos fuertes', 'image'=>'assets/img/restaurant/main-7.webp'],
            ['name'=>'Postre de chocolate', 'description'=>'Bizcocho húmedo con crema suave y frutos rojos.', 'price'=>18000, 'category'=>'Postres', 'image'=>'assets/img/restaurant/dessert-5.webp'],
            ['name'=>'Limonada natural', 'description'=>'Bebida fría preparada con limones frescos.', 'price'=>9000, 'category'=>'Bebidas', 'image'=>'assets/img/restaurant/drink-6.webp'],
        ];
    }
}
