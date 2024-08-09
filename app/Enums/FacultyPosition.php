<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum FacultyPosition: string implements HasColor, HasLabel
{
    case Professor = 'Professor';
    case AssociateProfessor = 'Associate Professor';
    case Lecturer = 'Lecturer';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Professor => 'Professor',
            self::AssociateProfessor => 'Associate Professor',
            self::Lecturer => 'Lecturer',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Professor => 'success',
            self::AssociateProfessor => 'primary',
            self::Lecturer => 'warning',
        };
    }
}
