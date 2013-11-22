<?php

class Upload
{
    protected
        $mimeType   = array(),
        $docRoot    = '/home/www/saidjohn/images/',
        $destDir    = '',
        $maxSize    = 0,
        $errors     = array(),
        $fileInfo   = array()
        ;
    public function __construct()
    {
    }

    public function setRuleMime($type)
    {
        switch ($type) {
            case 'text':
                $this->mimeType = array(
                    'text/plain'
                );
                break;
            case 'image':
                $this->mimeType = array(
                    'image/jpeg',
                    'image/jpg',
                    'image/pjpeg',
                    'image/png',
                    'image/gif',
                );
                break;
            case 'documents':
                $this->mimeType = array(
                    'application/msword',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                    'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                    'application/vnd.ms-powerpoint',
                    'application/vnd.ms-excel',
                    'application/vnd.oasis.opendocument.spreadsheet',
                    'application/vnd.oasis.opendocument.presentation',
                );
                break;
        }
    }

    public function setMaxSize($size)
    {
        $this->maxSize = $size;
    }

    public function setDestination($destination)
    {
        $this->destDir = $this->docRoot.$destination;
        if( !is_dir($this->destDir) )
        {
            mkdir($this->destDir, 0755);
        }
    }

    public function upload($fieldName)
    {
        $file = $_FILES[$fieldName];
        
        if( !in_array($file['type'], $this->mimeType) )
        {
            $this->errors = 'File type not allowed';
            return False;
        }

        if( (int)$file['size'] == 0 )
        {
            $this->errors = 'File null';
            return False;
        }

        if( !$this->destDir )
        {
            $this->errors = 'Folder upload not set';
        }

        if( $file['size'] > $this->maxSize )
        {
            $this->errors = 'maximum size '.$this->maxSize;
        }

        $ext      = $this->getExt($file['name']);
        $filename = md5_file($file['tmp_name']).'.'.$ext;
        if( !move_uploaded_file($file['tmp_name'], $this->destDir.'/'.$filename) )
        {
            $this->errors = 'Cannot Upload';
            return False;
        }

        $this->fileInfo = array(
            'filename'  => $filename,
            'size'      => $file['size'],
            'type'      => $file['type']
        );
        return True;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function getInfo()
    {
        return $this->fileInfo;
    }

    protected function getExt($filename)
    {
        return end(explode('.', $filename));
    }
}