<?php

namespace App\Controllers;

use App\Services\FileService\FileService;
use App\Services\FileService\Interface\FileNameGenerator;
use App\Services\FileService\Interface\PATH_DIRECTORY;

class Ckeditor extends BaseController
{
    public function index(): string
    {
        return view('ckeditor');
    }

    public function save()
    {
        $fileService = new FileService();
        $imageReq = $this->request->getFile('upload');

        $fileName = FileNameGenerator::generate($imageReq,null,"file_image_");

        // save to dir
        $fileService->save($imageReq,$fileName,PATH_DIRECTORY::UPLOAD_DIR);

        // NOTE this response needed from ckeditor
        return $this->response->setJSON([
            'fileName'=>$fileName,
            'uploaded'=>1,
            // wheres image can access/ saved
            'url'=>base_url('upload/folder_1/'.$fileName)
        ]);

    }
}