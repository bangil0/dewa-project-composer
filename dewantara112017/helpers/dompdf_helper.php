<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
function buildpdf($html, $filename='', $stream=TRUE) 
{
    require_once APPPATH.'third_party/dompdf/autoload.inc.php';
    // use Dompdf\Dompdf;

    /*// instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');

    // (Optional) Setup the paper size and orientation
    

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();*/

    $options = new Dompdf\Options();
    // $fontMetrics = new Dompdf\FontMetrics();
    $options->setIsPhpEnabled(true);
    $options->set(array(
        'pdfBackend'=>'PDFLib',
        'defaultMediaType'=>'print',
        'defaultPaperSize'=>'A4',
        'defaultFont'=>'Arial',
        'enable_html5_parser'=>true,
        'enable_font_subsetting'=>true
    ));

    $dompdf = new Dompdf\Dompdf($options);
    $dompdf->load_html($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->setBasePath(assets_url('css/bootstrap.min.css'));
    // $dompdf->setOptions('defaultFont', 'Arial');
    $dompdf->render();
    // $dompdf->set_paper('A4', 'landscape');
   
    // instantiate and use the dompdf class
    // $dompdf = new Dompdf($options);
    // $dompdf->setOptions($options);
    // $dompdf->setPaper(array(0, 0, 595, 841), 'landscape');
    $canvas = $dompdf->get_canvas();
    // $canvas->page_text(28, 800, "Copyright ©2016 GPS Insight", '', 8, array(0,0,0)); #copyright
    
    // $dompdf->setPaper('A4', 'landscape');
    // $dompdf->get_option('default_font');
    // $font = Font_Metrics::get_font("arial", "normal","10px");
    // the same call as in my previous example
      /*   $x = 72;
            $y = 18;
            $text = "Hal. {PAGE_NUM} / {PAGE_COUNT}";
            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 6;
            $color = array(255,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $canvas->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);*/
   /* $canvas->page_text(540, 773, "Hal. {PAGE_NUM}/{PAGE_COUNT}",
                   $font, 6, array(0,0,0));*/

            // $font = $fontMetrics->getFont("Arial", "bold");
            $canvas->page_text(10, 580, "STIE DEWANTARA JOMBANG", $font, 10, array(0, 0, 0));
            $canvas->page_text(770, 580, "Hal. {PAGE_NUM} / {PAGE_COUNT}", $font, 10, array(0, 0, 0));
            $canvas->line(10, 575, 830, 575, array(0,0,0), 1);

    if ($stream) {
        $dompdf->stream($filename.".pdf");
    } else {
        return $dompdf->output();
    }
    unset($html);
    unset($dompdf); 
}
function savepdf($html, $filename='', $stream=TRUE){
    require_once APPPATH.'third_party/dompdf/autoload.inc.php';
    // use Dompdf\Dompdf;

    $savein = APPPATH.'uploads/pdf/';
    $dompdf = new Dompdf\Dompdf();
     $options = new Dompdf\Options();
    $options->setIsPhpEnabled(true);
    $dompdf->setOptions($options);
    $dompdf->set_base_path(assets_url('css'));
    $dompdf->load_html($html);
    // $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $canvas = $dompdf->get_canvas();
    $dompdf->setBasePath(assets_url('css/bootstrap.min.css'));
    // $font = Font_Metrics::get_font("arial", "normal","10px");
    // $canvas->page_text(28, 800, "Copyright ©2016 GPS Insight", '', 8, array(0,0,0)); #copyright

    // the same call as in my previous example
    // $dompdf->setPaper('A4', 'landscape');
    // $dompdf->set_paper('A4', 'landscape');
    $dompdf->set_Paper(array(0, 0, 595, 841), 'landscape');
    /* $x = 72;
            $y = 18;
            $text = "Hal. {PAGE_NUM} / {PAGE_COUNT}";
            $font = $fontMetrics->get_font("helvetica", "bold");
            $size = 6;
            $color = array(255,0,0);
            $word_space = 0.0;  //  default
            $char_space = 0.0;  //  default
            $angle = 0.0;   //  default
            $canvas->page_text($x, $y, $text, $font, $size, $color, $word_space, $char_space, $angle);*/
   /* $canvas->page_text(540, 773, "Hal. {PAGE_NUM} / {PAGE_COUNT}",
                   $font, 6, array(0,0,0));
*/
    // $pdf = $dompdf->stream($filename.".pdf");      // gets the PDF as a string

    // $font = $fontMetrics->getFont("Arial", "bold");
            $pdf->page_text(10, 580, "Informe Resumen", $font, 10, array(0, 0, 0));
            $pdf->page_text(770, 580, "Pagina {PAGE_NUM} de {PAGE_COUNT}", $font, 10, array(0, 0, 0));
            $pdf->line(10, 575, 830, 575, array(0,0,0), 1);
    $pdf = $dompdf->output();      // gets the PDF as a string
    $CI =& get_instance();
    $CI->load->helper('file');
    // write_file("../invoices_temp/invoice_$filename.pdf", $dompdf->output());
    // file_put_contents($savein.str_replace("/","-",$filename).".pdf", $pdf);    // save the pdf file on server
    write_file($savein.str_replace("/","-",$filename).".pdf", $pdf);    // save the pdf file on server
    unset($html);
    unset($dompdf); 
}
?>