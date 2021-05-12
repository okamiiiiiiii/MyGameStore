<?php

namespace App\Support;

use Exception;

class CsvReader
{
    /**
     * Csv file path will be used.
     *
     * @var string
     */
    protected string $path;

    /**
     * Config.
     *
     * @var array
     */
    protected array $configs;

    /**
     * @var resource
     */
    protected $fp;

    /**
     * Constructor.
     *
     * @param string $path
     * @param array $configs
     * @throws Exception
     */
    public function __construct(string $path, array $configs = [])
    {
        if (!file_exists($path) || !is_readable($path)) {
            throw new Exception(sprintf('The path "%s" is not a file or not readable', $path));
        }

        $this->path = $path;

        $this->configs = array_merge([
            'header' => true,
            'to_encoding' => 'UTF-8',
            'from_encoding' => 'ASCII,JIS,UTF-8,EUC-JP,SJIS'
        ], $configs);
    }

    /**
     * Collect data from a given CSV file and return as array
     *
     * @return array
     */
    public function read(): array
    {
        $this->fp = fopen($this->path, 'r');
        $data = [];

        while (($row = fgetcsv($this->fp, 0, ',')) !== false) {
            if (!empty($this->configs['header']) && empty($header)) { // File has header
                $header = $this->readRow($row);
                continue;
            }

            $row = $this->readRow($row);

            if (!empty($header)) {
                $row = array_combine($header, $row);
            }
            $row = array_map(function ($element) {
                if ($element !== '') {
                    return $element;
                }
            }, $row);

            array_push($data, $row);
        }

        return $data;
    }

    /**
     * Read a CSV row into a array
     *
     * @param array $row
     * @return array
     */
    protected function readRow(array $row): array
    {
        return array_map(function ($value) {
            return mb_convert_encoding(trim($value), $this->configs['to_encoding'], $this->configs['from_encoding']);
        }, $row);
    }

    /**
     * destructor
     */
    public function __destruct()
    {
            fclose($this->fp);
    }
}
