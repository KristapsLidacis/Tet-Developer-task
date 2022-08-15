<?php

namespace App\Models;

class ItemsModelList
{

    private array $items = [];

    public function __construct(array $itemsList)
    {
        foreach ($itemsList as $item) {
            $this->add(new ItemsModel(
                $item->id,
                $item->name,
                $item->price
            ));
        }
    }

    public function add(ItemsModel $item): void
    {
        $this->items[] = $item;
    }

    public function getItems(): array
    {
        return $this->items;
    }
}
