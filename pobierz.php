<?php
            ob_clean();
            ob_end_flush();

            $zip = new ZipArchive();
            $zipname = substr($_POST['path'], 2).substr(time(), 5).".zip";
            $zip->open($zipname, ZipArchive::CREATE);

            $files = glob($_POST['path']."/*");
            for ($i = 0, $len = count($files); $i < $len; $i++) {
                if (isset($_POST['file_id'][$i]))
                    $zip->addFile($files[$i], basename($files[$i]));
            }
            $zip->close();
            
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename='.$zipname);
            header('Content-Length: ' . filesize($zipname));
            readfile($zipname);
            unlink($zipname);
?>