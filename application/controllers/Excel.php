<?php
defined('BASEPATH') OR exit('No direct script access allowed');


require 'vendor/autoload.php';


use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class Excel extends CI_Controller {

    public function index() {
        $tahun = date('Y');
        $data = $this->Ppdb_m->sesuaikan('siswa', ['tahun' => $tahun]);
        
        // load library PHPExcel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NISN');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Alamat');
        $sheet->setCellValue('E1', 'Nama Orang Tua');
        $sheet->setCellValue('F1', 'Asal Sekolah');
        $sheet->setCellValue('G1', 'Nomer Hp');
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Agama');
        $sheet->setCellValue('J1', 'Sumber');
        $sheet->setCellValue('K1', 'Jurusan');
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(14);
        $sheet->getColumnDimension('I')->setWidth(9);
        $sheet->getColumnDimension('J')->setWidth(10);
        $sheet->getColumnDimension('K')->setWidth(10);
			$no = 1;
			$x = 2;
			foreach($data as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row['nisn']);
				$sheet->setCellValue('C'.$x, $row['Nama']);
				$sheet->setCellValue('D'.$x, $row['alamat']);
				$sheet->setCellValue('E'.$x, $row['nama_ortu']);
				$sheet->setCellValue('F'.$x, $row['asek']);
				$sheet->setCellValue('G'.$x, $row['no_hp']);
				$sheet->setCellValue('H'.$x, $row['jenis_kelamin']);
				$sheet->setCellValue('I'.$x, $row['agama']);
				$sheet->setCellValue('J'.$x, $row['sumber']);
				$sheet->setCellValue('K'.$x, $row['jurusan']);
				$x++;
			}
            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => '000000'],
                    'size' => 11,
                    'name' => 'calibri'
                ],
                'fill' => [
                    'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '000000']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ]
            ];
            
            $sheet->getStyle('A1:K1')->applyFromArray($styleArray);
			$writer = new Xlsx($spreadsheet);
			$filename = 'data_ppdb';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
        }
    public function RPL() {
        $tahun = DATE('Y');
		$array = array('jurusan'=>'RPL', 'tahun'=>$tahun);
		$data = $this->Ppdb_m->sesuaikan('siswa', $array);
        
        // load library PHPExcel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NISN');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Alamat');
        $sheet->setCellValue('E1', 'Nama Orang Tua');
        $sheet->setCellValue('F1', 'Asal Sekolah');
        $sheet->setCellValue('G1', 'Nomer Hp');
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Agama');
        $sheet->setCellValue('J1', 'Sumber');
        $sheet->setCellValue('K1', 'Jurusan');
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(14);
        $sheet->getColumnDimension('I')->setWidth(9);
        $sheet->getColumnDimension('J')->setWidth(10);
        $sheet->getColumnDimension('K')->setWidth(10);
			$no = 1;
			$x = 2;
			foreach($data as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row['nisn']);
				$sheet->setCellValue('C'.$x, $row['Nama']);
				$sheet->setCellValue('D'.$x, $row['alamat']);
				$sheet->setCellValue('E'.$x, $row['nama_ortu']);
				$sheet->setCellValue('F'.$x, $row['asek']);
				$sheet->setCellValue('G'.$x, $row['no_hp']);
				$sheet->setCellValue('H'.$x, $row['jenis_kelamin']);
				$sheet->setCellValue('I'.$x, $row['agama']);
				$sheet->setCellValue('J'.$x, $row['sumber']);
				$sheet->setCellValue('K'.$x, $row['jurusan']);
				$x++;
			}
            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => '000000'],
                    'size' => 11,
                    'name' => 'calibri'
                ],
                'fill' => [
                    'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '000000']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ]
            ];
            
            $sheet->getStyle('A1:K1')->applyFromArray($styleArray);
			$writer = new Xlsx($spreadsheet);
			$filename = 'data_ppdb_RPL';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
        }
    public function AK() {
        $tahun = DATE('Y');
		$array = array('jurusan'=>'AK', 'tahun'=>$tahun);
		$data = $this->Ppdb_m->sesuaikan('siswa', $array);
        
        // load library PHPExcel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NISN');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Alamat');
        $sheet->setCellValue('E1', 'Nama Orang Tua');
        $sheet->setCellValue('F1', 'Asal Sekolah');
        $sheet->setCellValue('G1', 'Nomer Hp');
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Agama');
        $sheet->setCellValue('J1', 'Sumber');
        $sheet->setCellValue('K1', 'Jurusan');
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(14);
        $sheet->getColumnDimension('I')->setWidth(9);
        $sheet->getColumnDimension('J')->setWidth(10);
        $sheet->getColumnDimension('K')->setWidth(10);
			$no = 1;
			$x = 2;
			foreach($data as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row['nisn']);
				$sheet->setCellValue('C'.$x, $row['Nama']);
				$sheet->setCellValue('D'.$x, $row['alamat']);
				$sheet->setCellValue('E'.$x, $row['nama_ortu']);
				$sheet->setCellValue('F'.$x, $row['asek']);
				$sheet->setCellValue('G'.$x, $row['no_hp']);
				$sheet->setCellValue('H'.$x, $row['jenis_kelamin']);
				$sheet->setCellValue('I'.$x, $row['agama']);
				$sheet->setCellValue('J'.$x, $row['sumber']);
				$sheet->setCellValue('K'.$x, $row['jurusan']);
				$x++;
			}
            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => '000000'],
                    'size' => 11,
                    'name' => 'calibri'
                ],
                'fill' => [
                    'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '000000']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ]
            ];
            
            $sheet->getStyle('A1:K1')->applyFromArray($styleArray);
			$writer = new Xlsx($spreadsheet);
			$filename = 'data_ppdb_AK';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
        }
    public function AP() {
        $tahun = DATE('Y');
		$array = array('jurusan'=>'AK', 'tahun'=>$tahun);
		$data = $this->Ppdb_m->sesuaikan('siswa', $array);
        // load library PHPExcel

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'NISN');
        $sheet->setCellValue('C1', 'Nama');
        $sheet->setCellValue('D1', 'Alamat');
        $sheet->setCellValue('E1', 'Nama Orang Tua');
        $sheet->setCellValue('F1', 'Asal Sekolah');
        $sheet->setCellValue('G1', 'Nomer Hp');
        $sheet->setCellValue('H1', 'Jenis Kelamin');
        $sheet->setCellValue('I1', 'Agama');
        $sheet->setCellValue('J1', 'Sumber');
        $sheet->setCellValue('K1', 'Jurusan');
        $sheet->getColumnDimension('A')->setWidth(5);
        $sheet->getColumnDimension('B')->setWidth(20);
        $sheet->getColumnDimension('C')->setWidth(20);
        $sheet->getColumnDimension('D')->setWidth(25);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);
        $sheet->getColumnDimension('H')->setWidth(14);
        $sheet->getColumnDimension('I')->setWidth(9);
        $sheet->getColumnDimension('J')->setWidth(10);
        $sheet->getColumnDimension('K')->setWidth(10);
			$no = 1;
			$x = 2;
			foreach($data as $row)
			{
				$sheet->setCellValue('A'.$x, $no++);
				$sheet->setCellValue('B'.$x, $row['nisn']);
				$sheet->setCellValue('C'.$x, $row['Nama']);
				$sheet->setCellValue('D'.$x, $row['alamat']);
				$sheet->setCellValue('E'.$x, $row['nama_ortu']);
				$sheet->setCellValue('F'.$x, $row['asek']);
				$sheet->setCellValue('G'.$x, $row['no_hp']);
				$sheet->setCellValue('H'.$x, $row['jenis_kelamin']);
				$sheet->setCellValue('I'.$x, $row['agama']);
				$sheet->setCellValue('J'.$x, $row['sumber']);
				$sheet->setCellValue('K'.$x, $row['jurusan']);
				$x++;
			}
            $styleArray = [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => '000000'],
                    'size' => 11,
                    'name' => 'calibri'
                ],
                'fill' => [
                    'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['rgb' => '000000']
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER
                ]
            ];
            
            $sheet->getStyle('A1:K1')->applyFromArray($styleArray);
			$writer = new Xlsx($spreadsheet);
			$filename = 'data_ppdb_AP';
			
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
			header('Cache-Control: max-age=0');
	
			$writer->save('php://output');
        }
}