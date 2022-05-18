<?php

namespace App\Http\Livewire\Admin\User;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\businesses;

class UsersTable extends DataTableComponent
{

public function columns(): array
{
return [
Column::make('Name')
->sortable()
->searchable(),
Column::make('E-mail', 'first_name')
->sortable()
->searchable(),
Column::make('Verified', 'short_desc')
->sortable(),
];
}

public function query(): Builder
{
return businesses::query();
}
}