<?php

namespace app\controllers;

use Yii;
use app\models\FormSmp;
use app\models\FormSmpSearch;
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
use app\models\User;
use kartik\mpdf\Pdf;

/**
 * FormSmpController implements the CRUD actions for FormSmp model.
 */
class FormSmpController extends Controller
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
        ];
    }

    /**
     * Lists all FormSmp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormSmpSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormSmp model.
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
     * Creates a new FormSmp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
            // $form = Yii::$app->request->post('FormPekerjaan');

            // if ($model->id_pekerjaan_i == 7)
            // {
            //     $model->id_pekerjaan_i =  $form['id_pekerjaan_i_value'];
            // }
        $this->layout = 'main-body';
        
        $model = new FormSmp();

        $model->tgl_daftar = date('Y-m-d');
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
                // var_dump($model->errors);
                // die;
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing FormSmp model.
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
     * Deletes an existing FormSmp model.
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
     * Finds the FormSmp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormSmp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormSmp::findOne($id)) !== null) {
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
            $sheet->getColumnDimension('AG')->setWidth(20);
            $sheet->getColumnDimension('AH')->setWidth(20);
            $sheet->getColumnDimension('AI')->setWidth(20);
            $sheet->getColumnDimension('AJ')->setWidth(20);
            $sheet->getColumnDimension('AK')->setWidth(20);
            $sheet->getColumnDimension('AL')->setWidth(20);
            $sheet->getColumnDimension('AM')->setWidth(20);
            $sheet->getColumnDimension('AN')->setWidth(20);
            $sheet->getColumnDimension('AO')->setWidth(20);
            $sheet->getColumnDimension('AP')->setWidth(20);
            $sheet->getColumnDimension('AQ')->setWidth(20);
            $sheet->getColumnDimension('AR')->setWidth(20);
            $sheet->getColumnDimension('AS')->setWidth(20);
            $sheet->getColumnDimension('AT')->setWidth(20);
            $sheet->getColumnDimension('AU')->setWidth(20);
            $sheet->getColumnDimension('AV')->setWidth(20);
            $sheet->getColumnDimension('AW')->setWidth(20);
            $sheet->getColumnDimension('AX')->setWidth(20);
            $sheet->getColumnDimension('AY')->setWidth(20);
            $sheet->getColumnDimension('AZ')->setWidth(20);
            $sheet->getColumnDimension('BA')->setWidth(20);
            $sheet->getColumnDimension('BB')->setWidth(20);

            $sheet->setCellValue('A3', strtoupper('No'));
            $sheet->setCellValue('B3', strtoupper('No Pendaftaran'));
            $sheet->setCellValue('C3', strtoupper('Tanggal Daftar'));
            $sheet->setCellValue('D3', strtoupper('Tahun Pelajaran'));

            $sheet->setCellValue('E3', strtoupper('Nama Wali'));
            $sheet->setCellValue('F3', strtoupper('Usia Wali'));
            $sheet->setCellValue('G3', strtoupper('Pekerjaan Wali'));
            $sheet->setCellValue('H3', strtoupper('Alamat Wali'));
            $sheet->setCellValue('I3', strtoupper('Alamat Kantor Wali'));
            $sheet->setCellValue('J3', strtoupper('Nama Lengkap Anak'));
            $sheet->setCellValue('K3', strtoupper('Panggilan Anak'));
            $sheet->setCellValue('L3', strtoupper('TTL Anak'));
            
            $sheet->setCellValue('M3', strtoupper('Nama Lengkap Calon'));
            $sheet->setCellValue('N3', strtoupper('Panggilan Calon Calon'));
            $sheet->setCellValue('O3', strtoupper('Jenis Kelamin Calon'));
            $sheet->setCellValue('P3', strtoupper('TTL Calon'));
            $sheet->setCellValue('Q3', strtoupper('Agama Calon'));
            $sheet->setCellValue('R3', strtoupper('Kebutuhan Khusus Calon'));

            $sheet->setCellValue('S3', strtoupper('Alamat Calon'));
            $sheet->setCellValue('T3', strtoupper('Jenis Tinggal Calon'));
            $sheet->setCellValue('U3', strtoupper('Transport Calon'));
            $sheet->setCellValue('V3', strtoupper('Nomor Calon'));
            $sheet->setCellValue('W3', strtoupper('Email Calon'));

            $sheet->setCellValue('X3', strtoupper('Nama Ayah'));
            $sheet->setCellValue('Y3', strtoupper('Pendidikan Ayah'));
            $sheet->setCellValue('Z3', strtoupper('Pekerjaan Ayah'));
            $sheet->setCellValue('AA3', strtoupper('Penghasilan Ayah'));
            $sheet->setCellValue('AB3', strtoupper('Kebutuhan Khusus Ayah'));
            $sheet->setCellValue('AC3', strtoupper('Tahun Lahir Ayah'));
            
            $sheet->setCellValue('AD3', strtoupper('Nama Ibu'));
            $sheet->setCellValue('AE3', strtoupper('Pendidikan Ibu'));
            $sheet->setCellValue('AF3', strtoupper('Pekerjaan Ibu'));
            $sheet->setCellValue('AG3', strtoupper('Penghasilan Ibu'));
            $sheet->setCellValue('AH3', strtoupper('Kebutuhan Khusus Ibu'));
            $sheet->setCellValue('AI3', strtoupper('Tahun Lahir Ibu'));

            $sheet->setCellValue('AJ3', strtoupper('Nama Wali'));
            $sheet->setCellValue('AK3', strtoupper('Pendidikan Wali'));
            $sheet->setCellValue('AL3', strtoupper('Pekerjaan Wali'));
            $sheet->setCellValue('AM3', strtoupper('Penghasilan Wali'));
            $sheet->setCellValue('AN3', strtoupper('Tahun Lahir Wali'));

            $sheet->setCellValue('AO3', strtoupper('Tinggi Anak'));
            $sheet->setCellValue('AP3', strtoupper('Berat Anak'));
            $sheet->setCellValue('AQ3', strtoupper('Jarak Anak'));
            $sheet->setCellValue('AR3', strtoupper('Waktu Tempuh Anak'));
            $sheet->setCellValue('AS3', strtoupper('Saudara Anak'));

            $sheet->setCellValue('AT3', strtoupper('Asal Sekolah'));
            $sheet->setCellValue('AU3', strtoupper('Nama Sekolah'));
            $sheet->setCellValue('AV3', strtoupper('Lama Belajar'));
            $sheet->setCellValue('AW3', strtoupper('Alamat Sekolah'));
            $sheet->setCellValue('AX3', strtoupper('NO STTB'));
            $sheet->setCellValue('AY3', strtoupper('Tanggal Pindah Sekolah'));
            $sheet->setCellValue('AZ3', strtoupper('Dari Kelas'));
            $sheet->setCellValue('BA3', strtoupper('Prestasi di Sekolah'));
            $sheet->setCellValue('BB3', strtoupper('Prestasi Luar Sekolah'));

            $spreadsheet->getActiveSheet()->setCellValue('A1', 'Formulir Pendaftaran SMP');

            $spreadsheet->getActiveSheet()->getStyle('A3:BB3')->getFill()->setFillType(Fill::FILL_SOLID);
            $spreadsheet->getActiveSheet()->getStyle('A3:BB3')->getFill()->getStartColor()->setARGB('d8d8d8');
            $spreadsheet->getActiveSheet()->mergeCells('A1:BB1');
            $spreadsheet->getActiveSheet()->getDefaultRowDimension('3')->setRowHeight(25);
            $sheet->getStyle('A1:BB3')->getFont()->setBold(true);
            $sheet->getStyle('A1:BB3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $row = 3;
            $i=1;

            $searchModel = new FormSmp();

            foreach($searchModel->find()->all() as $formsmp){
                $row++;
                $sheet->setCellValue('A' . $row, $i);
                $sheet->setCellValue('B' . $row, $formsmp->no_daftar);
                $sheet->setCellValue('C' . $row, $formsmp->tgl_daftar);
                $sheet->setCellValue('D' . $row, $formsmp->tahun->nama);

                $sheet->setCellValue('E' . $row, $formsmp->nama_w);
                $sheet->setCellValue('F' . $row, $formsmp->usia_w);
                $sheet->setCellValue('G' . $row, $formsmp->pekerjaan_w);
                $sheet->setCellValue('H' . $row, $formsmp->alamat_w);
                $sheet->setCellValue('I' . $row, $formsmp->alamatkantor_w);
                $sheet->setCellValue('J' . $row, $formsmp->nm_lengkap_a);
                $sheet->setCellValue('K' . $row, $formsmp->panggilan_a);
                $sheet->setCellValue('L' . $row, $formsmp->tmptlahir_a);
                // $sheet->setCellValue('M' . $row, $formsmp->id_kelas);
                $sheet->setCellValue('M' . $row, $formsmp->lengkap_c);
                $sheet->setCellValue('N' . $row, $formsmp->panggilan_c);
                $sheet->setCellValue('O' . $row, $formsmp->jk->jk);
                $sheet->setCellValue('P' . $row, $formsmp->tmptlahir_c);
                $sheet->setCellValue('Q' . $row, $formsmp->agama->nama);
                $sheet->setCellValue('R' . $row, $formsmp->id_khusus_c);

                $sheet->setCellValue('S' . $row, $formsmp->alamat_c);
                $sheet->setCellValue('T' . $row, $formsmp->id_jenis_tnggl);
                $sheet->setCellValue('U' . $row, $formsmp->id_transport_c);
                $sheet->setCellValue('V' . $row, $formsmp->no_c);
                $sheet->setCellValue('W' . $row, $formsmp->email_c);

                $sheet->setCellValue('X' . $row, $formsmp->nama_b);
                $sheet->setCellValue('Y' . $row, $formsmp->id_pendidikan_b);
                $sheet->setCellValue('Z' . $row, $formsmp->id_pekerjaan_b);
                $sheet->setCellValue('AA' . $row, $formsmp->id_penghasilan_b);
                $sheet->setCellValue('AB' . $row, $formsmp->id_khusus_b);
                $sheet->setCellValue('AC' . $row, $formsmp->thnlahir_b);

                $sheet->setCellValue('AD' . $row, $formsmp->nama_i);
                $sheet->setCellValue('AE' . $row, $formsmp->id_pendidikan_i);
                $sheet->setCellValue('AF' . $row, $formsmp->id_pekerjaan_i);
                $sheet->setCellValue('AG' . $row, $formsmp->id_penghasilan_i);
                $sheet->setCellValue('AH' . $row, $formsmp->id_khusus_i);
                $sheet->setCellValue('AI' . $row, $formsmp->thnlahir_i);

                $sheet->setCellValue('AJ' . $row, $formsmp->nama_wl);
                $sheet->setCellValue('AK' . $row, $formsmp->thnlahir_w);
                $sheet->setCellValue('AL' . $row, $formsmp->id_pendidikan_wl);
                $sheet->setCellValue('AM' . $row, $formsmp->id_pekerjaan_wl);
                $sheet->setCellValue('AN' . $row, $formsmp->id_penghasilan_wl);

                $sheet->setCellValue('AO' . $row, $formsmp->tinggi_a. ' Centimeter');
                $sheet->setCellValue('AP' . $row, $formsmp->berat_a. ' Kilogram');
                $sheet->setCellValue('AQ' . $row, $formsmp->jarak_a. ' Meter');
                $sheet->setCellValue('AR' . $row, $formsmp->waktu_tempuh. 'Menit');
                $sheet->setCellValue('AS' . $row, $formsmp->saudara_a. 'Saudara');

                $sheet->setCellValue('AT' . $row, $formsmp->as1);
                $sheet->setCellValue('AU' . $row, $formsmp->as2);
                $sheet->setCellValue('AV' . $row, $formsmp->as3);
                $sheet->setCellValue('AW' . $row, $formsmp->as4);
                $sheet->setCellValue('AX' . $row, $formsmp->as5);
                $sheet->setCellValue('AY' . $row, $formsmp->as6);
                $sheet->setCellValue('AZ' . $row, $formsmp->as7);
                $sheet->setCellValue('BA3' . $row, $formsmp->as8);
                $sheet->setCellValue('BB3' . $row, $formsmp->as9);

                $i++;
            }

            $sheet->getStyle('A3:BB' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('D3:BB' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('E3:BB' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


            $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->getStyle('A3:BB' . $row)->applyFromArray($setBorderArray);

            $filename = time() . '_FormulirPendaftaranSMP_AL-Izzah.xlsx';
            $path = 'document/' . $filename;
            $writer = new Xlsx($spreadsheet);
            $writer->save($path);
            return $this->redirect($path);
        }
    }
    public function actionPdf($id)
    {
        $model = \app\models\FormSmp::findOne($id);
        // var_dump($model);
        // die;
        $content = $this->renderPartial('/template/formulirsmp', [
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
        $pdf->filename = "Formulir Pendaftaran SMP AL AL-IZZAH - ".$date.".pdf";
        return $pdf->render();
    }
}
