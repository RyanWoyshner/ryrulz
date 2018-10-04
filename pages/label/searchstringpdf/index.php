<?php
include('PdfToText/PdfToText.phpclass');
//$pdf = new PdfToText('http://localhost/searchstringpdf/test.pdf');
$pdf = new PdfToText('test.pdf');
$string = "name";
$data = $pdf->Text;
if(strpos($data, $string) !== false) {
	echo $string;
}else{
	echo "falied to search";
}
?>