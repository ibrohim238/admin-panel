<?php

namespace App\Enums;

class RolesAndPermissionsEnum
{
    /* roles */
    public const ADMIN = 'admin';
    public const EDITOR = 'editor';
    public const USER = 'user';

    /* permissions */
    public const MANAGE_PRODUCTS = 'manage_products';
    public const MANAGE_USERS = 'manage_users';

    public static function toPermissionEditor(): array
    {
        return [
            self::MANAGE_PRODUCTS,
        ];
    }
}