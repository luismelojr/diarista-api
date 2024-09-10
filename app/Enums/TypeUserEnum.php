<?php

namespace App\Enums;

enum TypeUserEnum: string
{
    case Admin = 'admin';
    case Customer = 'customer';
    case Diarist = 'diarist';
}
