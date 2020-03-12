<?php


namespace common\widgets;

class Grid extends \yii\bootstrap\Widget
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
        $result .= "</tr></thead><tbody>";

        foreach ($this->items as $row) {
            $result .= "<tr>";
            foreach ($row as $col) {
                $result .= "<td>$col</td>";
            }
            $result .= "</tr>";
        }

        $result .= "</tbody></table>";

        return $result;
    }
}