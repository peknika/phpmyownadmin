<?php


namespace src\Modules\Sidebar\Domain\Repository;


interface SidebarRepositoryInterface
{
    public function findAllItems(): array;
}