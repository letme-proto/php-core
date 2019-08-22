<?php
namespace LetMeProto\Core\Database;

interface DatabaseConfig {
    public function setConnSettings(string $host, string $login, string $pass, int $port);
}