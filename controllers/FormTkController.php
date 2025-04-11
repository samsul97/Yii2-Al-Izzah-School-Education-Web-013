<?php

namespace app\controllers;

use Yii;
use app\models\FormTk;
use app\models\FormTkSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOfactory;
use Mpdf\Mpdf;
use PhpOffice\PhpWord\Shared\Converter;
use yii\web\ArrayHelper;
use PhpOffice\PhpSpreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use yii\base\Behavior;
use yii\helpers\Url;
use yii\filters\AccessControl;
use Da\QrCode\QrCode;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use kartik\mpdf\Pdf;
use app\models\User;

/**
 * FormTkController implements the CRUD actions for FormTk model.
 */
class FormTkController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        //     [
        //       'class' => 'mdm\autonumber\Behavior',
        //     'attribute' => 'no_daftar', // required
        //     //'group' => $this->id_branch, // optional
        //     'value' => 'AI'.'?' , // format auto number. '?' will be replaced with generated number
        //     'digit' => 4 // optional, default to null. 
        // ],
        ];
    }

    /**
     * Lists all FormTk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormTkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormTk model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = 'main-body';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FormTk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'main-body';
        $model = new FormTk();
        
        $model->tgl_daftar = date('Y-m-d');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            // var_dump($model->errors);
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FormTk model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing FormTk model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FormTk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormTk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormTk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionExportExcel()
    {
        if (User::isAdmin() || User::isTK() || User::isSD() || User::isSMP())
        {
            $spreadsheet = new Spreadsheet();

            $spreadsheet->setActiveSheetIndex(0);

            $sheet = $spreadsheet->getActiveSheet();

            $setBorderArray = array(
                'borders' => array(
                    'allBorders' => array(
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => array('argb' => '000000'),
                    ),
                ),
            );

            $sheet->getColumnDimension('A')->setWidth(10);
            $sheet->getColumnDimension('B')->setWidth(20);
            $sheet->getColumnDimension('C')->setWidth(20);
            $sheet->getColumnDimension('D')->setWidth(20);
            $sheet->getColumnDimension('E')->setWidth(20);
            $sheet->getColumnDimension('F')->setWidth(20);
            $sheet->getColumnDimension('G')->setWidth(20);
            $sheet->getColumnDimension('H')->setWidth(20);
            $sheet->getColumnDimension('I')->setWidth(20);
            $sheet->getColumnDimension('J')->setWidth(20);
            $sheet->getColumnDimension('K')->setWidth(20);
            $sheet->getColumnDimension('L')->setWidth(20);
            $sheet->getColumnDimension('M')->setWidth(20);
            $sheet->getColumnDimension('N')->setWidth(20);
            $sheet->getColumnDimension('O')->setWidth(20);
            $sheet->getColumnDimension('P')->setWidth(20);
            $sheet->getColumnDimension('Q')->setWidth(20);
            $sheet->getColumnDimension('R')->setWidth(20);
            $sheet->getColumnDimension('S')->setWidth(20);
            $sheet->getColumnDimension('T')->setWidth(20);
            $sheet->getColumnDimension('U')->setWidth(20);
            $sheet->getColumnDimension('V')->setWidth(20);
            $sheet->getColumnDimension('W')->setWidth(20);
            $sheet->getColumnDimension('X')->setWidth(20);
            $sheet->getColumnDimension('Y')->setWidth(20);
            $sheet->getColumnDimension('Z')->setWidth(20);
            $sheet->getColumnDimension('AA')->setWidth(20);
            $sheet->getColumnDimension('AB')->setWidth(20);
            $sheet->getColumnDimension('AC')->setWidth(20);
            $sheet->getColumnDimension('AD')->setWidth(20);
            $sheet->getColumnDimension('AE')->setWidth(20);
            $sheet->getColumnDimension('AF')->setWidth(20);

            $sheet->setCellValue('A3', strtoupper('No'));
            $sheet->setCellValue('B3', strtoupper('No Pendaftaran'));
            $sheet->setCellValue('C3', strtoupper('Tanggal Daftar'));
            $sheet->setCellValue('D3', strtoupper('Tahun Pelajaran'));

            $sheet->setCellValue('E3', strtoupper('Nama Anak'));
            $sheet->setCellValue('F3', strtoupper('Tempat Lahir Anak'));
            $sheet->setCellValue('G3', strtoupper('Tanggal Lahir Anak'));
            $sheet->setCellValue('H3', strtoupper('Jenis Kelamin Anak'));
            $sheet->setCellValue('I3', strtoupper('Saudara Anak'));
            $sheet->setCellValue('J3', strtoupper('Tinggi Anak'));
            $sheet->setCellValue('K3', strtoupper('Berat Anak'));
            $sheet->setCellValue('L3', strtoupper('Penyakit Anak'));
            $sheet->setCellValue('M3', strtoupper('Imun Anak'));
            
            $sheet->setCellValue('N3', strtoupper('Nama Ayah'));
            $sheet->setCellValue('O3', strtoupper('Pendidikan Ayah'));
            $sheet->setCellValue('P3', strtoupper('Pekerjaan Ayah'));
            $sheet->setCellValue('Q3', strtoupper('Penghasilan Ayah'));
            $sheet->setCellValue('R3', strtoupper('NO HP Ayah'));
            $sheet->setCellValue('S3', strtoupper('Alamat Ayah'));

            $sheet->setCellValue('T3', strtoupper('Nama Ibu'));
            $sheet->setCellValue('U3', strtoupper('Pendidikan Ibu'));
            $sheet->setCellValue('V3', strtoupper('Pekerjaan Ibu'));
            $sheet->setCellValue('W3', strtoupper('Penghasilan Ibu'));
            $sheet->setCellValue('X3', strtoupper('NO HP Ibu'));
            $sheet->setCellValue('Y3', strtoupper('Alamat Ibu'));

            $sheet->setCellValue('Z3', strtoupper('Fisik Anak'));
            $sheet->setCellValue('AA3', strtoupper('Bakat Anak'));
            $sheet->setCellValue('AB3', strtoupper('Kepribadian Anak'));
            $sheet->setCellValue('AC3', strtoupper('Quran Anak'));
            $sheet->setCellValue('AD3', strtoupper('Buku Anak'));
            $sheet->setCellValue('AE3', strtoupper('Jilid Anak'));
            $sheet->setCellValue('AF3', strtoupper('Alpabet Anak'));
        // $sheet->setCellValue('K3', strtoupper('Hari'));

            $spreadsheet->getActiveSheet()->setCellValue('A1', 'Formulir Pendaftaran TK');

            $spreadsheet->getActiveSheet()->getStyle('A3:AF3')->getFill()->setFillType(Fill::FILL_SOLID);
            $spreadsheet->getActiveSheet()->getStyle('A3:AF3')->getFill()->getStartColor()->setARGB('d8d8d8');
            $spreadsheet->getActiveSheet()->mergeCells('A1:AF1');
            $spreadsheet->getActiveSheet()->getDefaultRowDimension('3')->setRowHeight(25);
            $sheet->getStyle('A1:AF3')->getFont()->setBold(true);
            $sheet->getStyle('A1:AF3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $row = 3;
            $i=1;

            $searchModel = new FormTk();

            foreach($searchModel->find()->all() as $formtk){
                $row++;
                $sheet->setCellValue('A' . $row, $i);
                $sheet->setCellValue('B' . $row, $formtk->no_daftar);
                $sheet->setCellValue('C' . $row, $formtk->tgl_daftar);
                $sheet->setCellValue('D' . $row, $formtk->tahun->nama);
                $sheet->setCellValue('E' . $row, $formtk->nama_a);
                $sheet->setCellValue('F' . $row, $formtk->tmptlahir_a);
                $sheet->setCellValue('G' . $row, $formtk->tgllahir_a);
                $sheet->setCellValue('H' . $row, $formtk->jk->jk);
                $sheet->setCellValue('I' . $row, $formtk->saudara_a. 'Saudara');
                $sheet->setCellValue('J' . $row, $formtk->tnggi_a. 'CM');
                $sheet->setCellValue('K' . $row, $formtk->berat_a. 'KG');
                $sheet->setCellValue('L' . $row, $formtk->penyakit_a);
                $sheet->setCellValue('M' . $row, $formtk->imun_a);
                
                $sheet->setCellValue('N' . $row, $formtk->nama_b);
                $sheet->setCellValue('O' . $row, $formtk->pendidikan_b);
                $sheet->setCellValue('P' . $row, $formtk->pekerjaan_b);
                $sheet->setCellValue('Q' . $row, $formtk->penghasilan_b);
                $sheet->setCellValue('R' . $row, $formtk->hp_b);
                $sheet->setCellValue('S' . $row, $formtk->alamat_b);

                $sheet->setCellValue('T' . $row, $formtk->nama_i);
                $sheet->setCellValue('U' . $row, $formtk->pendidikan_i);
                $sheet->setCellValue('V' . $row, $formtk->pekerjaan_i);
                $sheet->setCellValue('W' . $row, $formtk->penghasilan_i);
                $sheet->setCellValue('X' . $row, $formtk->hp_i);
                $sheet->setCellValue('Y' . $row, $formtk->alamat_i);

                $sheet->setCellValue('Z' . $row, $formtk->fisik_a);
                $sheet->setCellValue('AA' . $row, $formtk->bakat_a);
                $sheet->setCellValue('AB' . $row, $formtk->kepribadian_a);
                $sheet->setCellValue('AC' . $row, $formtk->quran_a);
                $sheet->setCellValue('AD' . $row, $formtk->buku_a);
                $sheet->setCellValue('AE' . $row, $formtk->jilid_a);
                $sheet->setCellValue('AF' . $row, $formtk->alpabet_a);

                $i++;
            }

            $sheet->getStyle('A3:AF' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('D3:AF' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('E3:AF' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


            $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->getStyle('A3:AF' . $row)->applyFromArray($setBorderArray);

            $filename = time() . '_FormulirPendaftaranTK_AL-Izzah.xlsx';
            $path = 'document/' . $filename;
            $writer = new Xlsx($spreadsheet);
            $writer->save($path);

            return $this->redirect($path);
        } 
        // elseif(User::isDosen()) {
        //     $spreadsheet = new Spreadsheet();

        //     $spreadsheet->setActiveSheetIndex(0);

        //     $sheet = $spreadsheet->getActiveSheet();

        //     $setBorderArray = array(
        //         'borders' => array(
        //             'allBorders' => array(
        //                 'borderStyle' => Border::BORDER_THIN,
        //                 'color' => array('argb' => '000000'),
        //             ),
        //         ),
        //     );

        //     $sheet->getColumnDimension('A')->setWidth(10);
        //     $sheet->getColumnDimension('B')->setWidth(20);
        //     $sheet->getColumnDimension('C')->setWidth(20);
        //     $sheet->getColumnDimension('D')->setWidth(20);
        //     $sheet->getColumnDimension('E')->setWidth(20);
        //     $sheet->getColumnDimension('F')->setWidth(20);
        //     $sheet->getColumnDimension('G')->setWidth(20);
        //     $sheet->getColumnDimension('H')->setWidth(20);
        //     $sheet->getColumnDimension('I')->setWidth(20);
        //     $sheet->getColumnDimension('J')->setWidth(20);
        // // $sheet->getColumnDimension('K')->setWidth(20);
        // // $sheet->getColumnDimension('L')->setWidth(20);

        //     $sheet->setCellValue('A3', strtoupper('No'));
        //     $sheet->setCellValue('B3', strtoupper('Mata Kuliah'));
        //     $sheet->setCellValue('C3', strtoupper('Dosen'));
        //     $sheet->setCellValue('D3', strtoupper('Kategori'));
        //     $sheet->setCellValue('E3', strtoupper('Kelas'));
        //     $sheet->setCellValue('F3', strtoupper('Tahun Akademik'));
        //     $sheet->setCellValue('G3', strtoupper('Semester'));
        //     $sheet->setCellValue('H3', strtoupper('Jam Awal'));
        //     $sheet->setCellValue('I3', strtoupper('Jam Akhir'));
        //     $sheet->setCellValue('J3', strtoupper('Ruang'));
        // // $sheet->setCellValue('K3', strtoupper('Hari'));

        //     $spreadsheet->getActiveSheet()->setCellValue('A1', 'Jadwal Kuliah Dosen');

        //     $spreadsheet->getActiveSheet()->getStyle('A3:J3')->getFill()->setFillType(Fill::FILL_SOLID);
        //     $spreadsheet->getActiveSheet()->getStyle('A3:J3')->getFill()->getStartColor()->setARGB('d8d8d8');
        //     $spreadsheet->getActiveSheet()->mergeCells('A1:J1');
        //     $spreadsheet->getActiveSheet()->getDefaultRowDimension('3')->setRowHeight(25);
        //     $sheet->getStyle('A1:J3')->getFont()->setBold(true);
        //     $sheet->getStyle('A1:J3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        //     $row = 3;
        //     $i=1;

        //     $searchModel = new Jadwalkuliah();

        //     foreach($searchModel->find()->andWhere(['jadwalkuliah.id_dosen' => $jadwalkuliah])->all() as $jadwalkuliah){
        //         $row++;
        //         $sheet->setCellValue('A' . $row, $i);
        //         $sheet->setCellValue('B' . $row, $jadwalkuliah->matakuliah->nama);
        //         $sheet->setCellValue('C' . $row, $jadwalkuliah->dosen->nama);
        //         $sheet->setCellValue('D' . $row, $jadwalkuliah->kategori->nama);
        //         $sheet->setCellValue('E' . $row, $jadwalkuliah->kelas->nama);
        //         $sheet->setCellValue('F' . $row, $jadwalkuliah->thn_akademik);
        //         $sheet->setCellValue('G' . $row, $jadwalkuliah->semester->nama);
        //         $sheet->setCellValue('H' . $row, $jadwalkuliah->jam_awal);
        //         $sheet->setCellValue('I' . $row, $jadwalkuliah->jam_akhir);
        //         $sheet->setCellValue('J' . $row, $jadwalkuliah->ruang->nama);
        //     // $sheet->setCellValue('L' . $row, $jadwalkuliah->hari);

        //         $i++;
        //     }

        //     $sheet->getStyle('A3:J' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        //     $sheet->getStyle('D3:J' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        //     $sheet->getStyle('E3:J' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


        //     $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

        //     $sheet->getStyle('A3:J' . $row)->applyFromArray($setBorderArray);

        //     $filename = time() . '_Daftar Jadwal Kuliah.xlsx';
        //     $path = 'document/' . $filename;
        //     $writer = new Xlsx($spreadsheet);
        //     $writer->save($path);

        //     return $this->redirect($path);
        // }
    }
  //   public function actionExportPdf() 
  //   {
  //     $this->layout='main';
  //     $model = Jadwalkuliah::find()->All();
  //     $mpdf=new mPDF();
  //     $mpdf->WriteHTML($this->renderPartial('exportpdf',['model'=>$model]));
  //     $mpdf->Output('_DataJadwalKuliah.pdf', 'D');
  //     exit;
  // }

    public function actionPdf($id)
    {
        $model = \app\models\FormTk::findOne($id);
        // var_dump($model);
        // die;
        $content = $this->renderPartial('/template/formulirtk', [
         'model' => $model,
         'id' => $id,
     ]);
        $pdf = new Pdf([
            // set to use core fonts only
            'mode' => Pdf::MODE_UTF8,
            'marginLeft' => 10,
            'marginRight' => 10,
            // A4 paper format
            'format' => Pdf::FORMAT_LEGAL,
            // portrait orientation
            'orientation' => Pdf::ORIENT_PORTRAIT,
            // stream to browser inline
            'destination' => Pdf::DEST_BROWSER,
            // your html content input
            'content' => $content,
            // format content from your own css file if needed or use the
            // enhanced bootstrap css built by Krajee for mPDF formatting
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
            // any css to be embedded if required

             // set mPDF properties on the fly
            'options' => ['title' => 'Linen - Supervisi Outsourcing'],
             // call mPDF methods on the fly
            'methods' => [
                'SetHeader'=> [null],
                'SetFooter'=> [null],
            ]
        ]);
        $date = date('Y-m-d His');
        $pdf->filename = "Formulir Pendaftaran TK AL AL-IZZAH- ".$date.".pdf";
        return $pdf->render();
    }
    public function actionEditStatus($id, $status)
    {
      $model = $this->findModel($id);
      $model->status = $status;
      if ($model->save(false)) {
        Yii::$app->session->setFlash('Berhasil', 'Status telah di Ubah');
        return $this->redirect(['form-tk/index']);
      }
      else
      {
        // echo "Weak";
        var_dump($model->errors);
        die;
      }
    }
}
