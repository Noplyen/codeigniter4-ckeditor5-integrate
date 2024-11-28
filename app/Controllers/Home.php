<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('ckeditor');
    }

    public function save()
    {
        $imageReq = $this->request->getFile('upload');

        $imageReq->move(FCPATH."upload/");

            // NOTE this response needed from ckeditor
            return $this->response->setJSON([
                'fileName'=>$imageReq->getName(),
                'uploaded'=>1,
                'url'=>base_url('upload/'.$imageReq->getName())
            ]);

        }
}
