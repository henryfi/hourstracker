<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Report extends Controller {


    public function action_download()
    {
        $q = http_build_query($_POST);
        $raw = file_get_contents(URL::base(TRUE).'api/tasks?'.$q);
        $raw = json_decode($raw);

        $data = array();
        $total = 0;
        foreach($raw as $row)
        {
            $data[] = array(
                $row->date,
                $row->project,
                $row->by_user_name,
                $row->task,
                str_replace('.',',', $row->hours)
            );
            $total += $row->hours;
        }

        $footer = array('','','','', str_replace('.',',', $total));


        $view = View::factory('Excelreport');
        $view->data = $data;
        $view->footer = $footer;

        $startDate = date('d.m.Y', strtotime($_POST['startDate']));
        $endDate = date('d.m.Y', strtotime($_POST['endDate']));
        $strFileName = 'hours_report_'.date('Y-m-d').'.xls';
        $view->h1 = 'Hours report';
        $view->h2 = $startDate.' - '.$endDate;

        $output = $view->render();
        
        header("HTTP/1.1 200 OK");
        header("Pragma: public");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");

        // The optional second 'replace' parameter indicates whether the header
        // should replace a previous similar header, or add a second header of
        // the same type. By default it will replace, but if you pass in FALSE
        // as the second argument you can force multiple headers of the same type.
        header("Cache-Control: private", false);

        header("Content-type: application/msexcel");

        // $strFileName is, of course, the filename of the file being downloaded. 
        // This won't have to be the same name as the actual file.
        header("Content-Disposition: attachment; filename=\"{$strFileName}\""); 

        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . mb_strlen($output));

        echo $output;
        exit;
    }

} // End Welcome
