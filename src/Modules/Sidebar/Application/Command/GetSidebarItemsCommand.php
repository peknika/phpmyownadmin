<?php


namespace src\Modules\Sidebar\Application\Command;

use src\Modules\Sidebar\Domain\Repository\SidebarRepositoryInterface;

class GetSidebarItemsCommand
{
    private $sidebarRepository;

    public function __construct(SidebarRepositoryInterface $sidebarRepository)
    {

        $this->sidebarRepository = $sidebarRepository;
    }

    public function execute(): array
    {
        return $this->sidebarRepository->findAllItems();
    }
}