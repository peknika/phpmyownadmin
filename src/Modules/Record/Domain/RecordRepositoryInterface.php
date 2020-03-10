<?php


interface RecordRepositoryInterface
{
    public function getAllByTableName(string $tableName): array;
}