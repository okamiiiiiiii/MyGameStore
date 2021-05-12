<?php

namespace App\Support\ExportDatabaseToEnum;

use Exception;

class ExportDataEnum
{
    /**
     * @var string
     */
    protected string $path = 'app/Enums';

    /**
     * @var string
     */
    protected string $file;

    /**
     * @var string
     */
    protected string $className;

    /**
     * @var string
     */
    protected string $content;

    public function __construct(string $className, string $content, string $path = '')
    {
        $this->className = $className;

        $this->content = trim($content, "\n");

        $this->path = $path ? $this->path . '/' . $path : $this->path;

        $this->file = $this->path . '/' . sprintf('%s.php', $this->className);
    }

    /**
     * Make file enum
     *
     * @return void
     */
    public function makeFile(): void
    {
        if (!file_exists($this->path)) {
            mkdir($this->path, 0755);
        }

        chmod($this->path, 0755);
    }

    /**
     * Get content enum file template
     *
     * @return string
     * @throws Exception
     */
    public function readFileTemplate(): string
    {
        $template = resource_path('templates/EnumModel.txt');

        if (!file_exists($template) || !is_readable($template)) {
            throw new Exception(sprintf('The path "%s" is not a file or not readable', $template));
        }
        $search = ["/", "app"];
        $replace = ["\\", "App"];
        $namespace = str_replace($search, $replace, $this->path);

        $values = [
            '$className' => $this->className,
            '$content' => $this->content,
            '$namespace' => $namespace
        ];

        return strtr(file_get_contents($template), $values);
    }

    /**
     * Write file enum
     *
     * @return void
     * @throws Exception
     */
    public function write(): void
    {
        $this->makeFile();

        $content = $this->readFileTemplate();

        file_put_contents($this->file, $content);
    }
}
