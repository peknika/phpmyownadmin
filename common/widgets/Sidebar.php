<?php


namespace common\widgets;


use yii\bootstrap\Widget;

class Sidebar extends Widget
{
    public $items;

    public function init()
    {
        parent::init();
        if ($this->items === null) {
            return "Nothing to watch here";
        }
    }

    public function run()
    {
        $result = "";

        foreach (array_values($this->items) as $item) {
            $result .= "<a href=\\{$item['link']} class=\"list-group-item list-group-item-action bg-light\">{$item['title']}</a>";
        }
        return $result;
    }
}