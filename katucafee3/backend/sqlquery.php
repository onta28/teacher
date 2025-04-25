<?php

function sqlCRUD($sql, $data = [])
{
    try {
        include_once('server/server.php');
        $pre=$connection->prepare($sql);
        return $pre->execute($data);
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
}
