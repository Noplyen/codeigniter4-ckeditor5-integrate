<?php

namespace App\Controllers;

class SimpleFileManagerCkEditor extends BaseController
{
    // path where file image are saved
    private static $PATH_RESOURCE_IMAGE = ROOTPATH."public/upload";

    public function __construct()
    {
        helper('filesystem');
    }

    /**
     * This method handle 2 request within param and not
     *
     * @return string
     */
    public function index()
    {
        // when request passing param name of folder
        $param = $this->request->getGet('folder');

        if(empty($param)){

            // we will displaying all folder not file, see at param 2 at directory_map
            // if you want to displaying both (file or folder ) pass default value as 0
            $map = directory_map(self::$PATH_RESOURCE_IMAGE,1);

            $data = ["root"=>$map];

            return view("folder-manager",$data);

        }else{
            // the param request doesnt support '/' so im deleting at view
            // and add '/' in here
            $param = "/".$param;

            // scan dir map
            $files = directory_map(self::$PATH_RESOURCE_IMAGE.$param);

            $data =
                [
                    "image_files"=>$files,
                    // for preview images
                    "image_url"=> base_url("upload{$param}/"),
                    "image_dir"=>"{$param}/"
                ];

            return view("file-manager",$data);

        }
    }

    public function delete()
    {
        $path = $this->request->getVar("file_path");

        unlink(self::$PATH_RESOURCE_IMAGE.'/'.$path);

        return redirect()->back();
    }
}