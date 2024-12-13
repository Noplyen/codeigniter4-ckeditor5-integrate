<?php

namespace App\Services\FileService;

use App\Services\FileService\Interface\UploadedService;
use CodeIgniter\HTTP\Files\UploadedFile;

class FileService implements UploadedService
{

    public function save(UploadedFile $file, string $fileName, string $pathSaved)
    {
            $this->moveFile($file,$fileName,$pathSaved);
    }

    public function delete(string $fileName,string $path)
    {
        if(unlink($path.$fileName)) {
        // logging file successfully deleted
        }
    }

    private function moveFile(UploadedFile $file,
                              string       $fileName,
                              string       $path)
    {
        try {
            $file->move($path, $fileName);


        }catch (\Exception $exception){
            throw new \RuntimeException($exception->getMessage());
        }
    }
}