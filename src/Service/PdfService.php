<?php
// namespace for pdf.php
namespace App\Service;
use Dompdf\Dompdf;
use Dompdf\Options;


class PdfService {
    private $domPdf;

    public function __construct(){
        $this->domPdf = new Dompdf();

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $this->domPdf->setOptions($pdfOptions);
    }

    public function generatePdf($html){
        $this->domPdf->loadHtml($html);
        $this->domPdf->setPaper('A4', 'landscape');
        $this->domPdf->render();
        $this->domPdf->stream("mon_pdf.pdf", [
            "Attachment" => false
        ]);
    }
}