<?php

namespace common\widgets;

use yii\bootstrap\Nav;
use yii\bootstrap\Widget;

class Grid extends Widget
{
    public $tableName;
    public $items;
    public $eye;
    public $trash;

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
        $result .= "<th>View</th><th>Delete</th></thead><tbody></tr>";

        foreach ($this->items as $row) {
            $result .= "<tr id={$row['sys_id']}>";
            foreach ($row as $col) {
                $result .= "<td>$col</td>";
            }
            $result .= "<td>"
            .         Nav::widget([
                    'items' => [
                        ['label' => $this->eye, 'url' => ["record/index/?table_name={$this->tableName}&sys_id={$row['sys_id']}"]]
                    ],
                    'encodeLabels' => false
                ]) .
            "</td><td>"
                .         Nav::widget([
                    'items' => [
                        ['label' => $this->trash, 'url' => ["record/delete?table_name={$this->tableName}&sys_id={$row['sys_id']}"]]
                    ],
                    'encodeLabels' => false
                ]) .            "</td></tr>";
        }

        $result .= "</tbody></table>";

        return $result;
    }
}