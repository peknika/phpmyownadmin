<?php


namespace common\widgets;

use yii\bootstrap\Html;
use yii\bootstrap\Widget;

class Grid extends Widget
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
        $result = "<table class=\"table table-striped\"><thead><tr>";

        foreach (array_keys($this->items[0]) as $header) {
            $result .= "<th scope=\"col\">$header</th>";

        }
        $result .= "<th>Delete</th><th>View</th></thead><tbody></tr>";

        foreach ($this->items as $row) {
            $result .= "<tr id={$row['sys_id']}>";
            foreach ($row as $col) {
                $result .= "<td>$col</td>";
            }
            $result .= "<td>⒳</td><td>⒱</td></tr>";
        }

        $result .= "</tbody></table>";

        return $result;
    }
}