<?php

namespace App\Helpers;

use Illuminate\Contracts\Filesystem\FileNotFoundException;

class FileHelper
{
    public static function getCsv(string $filePath)
    {
        $result = [];
        $file = fopen($filePath, "r");

        if ($file === false) {
            throw new FileNotFoundException("File is not available at the given path, which is " . $filePath);
        }

        while (($row = fgetcsv($file)) !== FALSE) {
            $result[] = $row;
        }

        fclose($file);
        return $result;
    }
}
