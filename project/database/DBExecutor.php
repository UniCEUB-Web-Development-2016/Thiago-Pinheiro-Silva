<?php

class DBExecutor
{

    public function execute($con, $query)
    {
        $result = $con->query($query);
        if (!$this->isSelect($query))
            return (bool)$result;
        if(is_bool($result) && !$result)
            return $result;
        if ($result->rowCount() > 0)
            return $result->fetchAll(PDO::FETCH_ASSOC);
        if ($finalResult === false)
            return 'Pesquisa sem resultados ou com campos nulos';
    }

    private function isSelect($query)
    {
        return !(substr($query, 0, 6) != 'SELECT');
    }
}
