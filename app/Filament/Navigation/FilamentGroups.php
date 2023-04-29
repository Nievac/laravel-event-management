<?php

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;

function registerFilamentNavigationGroups(): void
{
    Filament::registerNavigationGroups([
        NavigationGroup::make()
            ->label('System Settings')
            ->icon('heroicon-s-cog')
            ->collapsed(),
    ]);
}
