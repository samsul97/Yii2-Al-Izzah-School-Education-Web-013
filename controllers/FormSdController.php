<?php

namespace app\controllers;

use Yii;
use app\models\FormSd;
use app\models\FormSdSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
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
 * FormSdController implements the CRUD actions for FormSd model.
 */
class FormSdController extends Controller
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
     * Lists all FormSd models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FormSdSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FormSd model.
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
     * Creates a new FormSd model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = 'main-body';
        $model = new FormSd();

        $model->tgl_daftar = date('Y-m-d');
        $model->as10 = 1;
        
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
     * Updates an existing FormSd model.
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
     * Deletes an existing FormSd model.
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
     * Finds the FormSd model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return FormSd the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = FormSd::findOne($id)) !== null) {
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
            $sheet->getColumnDimension('BC')->setWidth(20);
            $sheet->getColumnDimension('BD')->setWidth(20);
            $sheet->getColumnDimension('BE')->setWidth(20);
            $sheet->getColumnDimension('BF')->setWidth(20);
            $sheet->getColumnDimension('BG')->setWidth(20);
            $sheet->getColumnDimension('BH')->setWidth(20);
            $sheet->getColumnDimension('BI')->setWidth(20);
            $sheet->getColumnDimension('BJ')->setWidth(20);
            $sheet->getColumnDimension('BK')->setWidth(20);
            $sheet->getColumnDimension('BL')->setWidth(20);
            $sheet->getColumnDimension('BM')->setWidth(20);
            $sheet->getColumnDimension('BN')->setWidth(20);
            $sheet->getColumnDimension('BO')->setWidth(20);
            $sheet->getColumnDimension('BP')->setWidth(20);
            $sheet->getColumnDimension('BQ')->setWidth(20);
            $sheet->getColumnDimension('BR')->setWidth(20);
            $sheet->getColumnDimension('BS')->setWidth(20);
            $sheet->getColumnDimension('BT')->setWidth(20);
            $sheet->getColumnDimension('BU')->setWidth(20);
            $sheet->getColumnDimension('BV')->setWidth(20);
            $sheet->getColumnDimension('BW')->setWidth(20);
            $sheet->getColumnDimension('BX')->setWidth(20);
            $sheet->getColumnDimension('BY')->setWidth(20);
            $sheet->getColumnDimension('BZ')->setWidth(20);

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
            $sheet->setCellValue('N3', strtoupper('Panggilan Calon Siswa'));
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
            $sheet->setCellValue('AK3', strtoupper('Tahun Lahir Wali'));
            $sheet->setCellValue('AL3', strtoupper('Pendidikan Wali'));
            $sheet->setCellValue('AM3', strtoupper('Pekerjaan Wali'));
            $sheet->setCellValue('AN3', strtoupper('Penghasilan Wali'));

            $sheet->setCellValue('AO3', strtoupper('Tinggi Anak'));
            $sheet->setCellValue('AP3', strtoupper('Berat Anak'));
            $sheet->setCellValue('AQ3', strtoupper('Jarak Anak'));
            $sheet->setCellValue('AR3', strtoupper('Waktu Tempuh Anak'));
            $sheet->setCellValue('AS3', strtoupper('Saudara Anak'));

            $sheet->setCellValue('AT3', strtoupper('1. Setiap Hari Libur Terpisah dari Orang Tua'));
            $sheet->setCellValue('AU3', strtoupper('2. Bangun Tidur Sendiri'));
            $sheet->setCellValue('AV3', strtoupper('3. Merapikan Tempat Tidur Sendiri'));
            $sheet->setCellValue('AW3', strtoupper('4. Mandi Sendiri'));
            $sheet->setCellValue('AX3', strtoupper('5. Makan Sendiri'));
            $sheet->setCellValue('AY3', strtoupper('6. Buang Air Besar/Kecil dan Menyucikanya Sendiri'));
            $sheet->setCellValue('AZ3', strtoupper('7. Memakai Pakaian Sendiri'));
            $sheet->setCellValue('BA3', strtoupper('8. Menyiapkan Peralatan Sekolah Sendiri'));
            $sheet->setCellValue('BB3', strtoupper('9. Belajar di Rumah Selalu di Tunggu'));
            $sheet->setCellValue('BC3', strtoupper('10. Sholat/Ngaji Tanpa di Suruh'));
            $sheet->setCellValue('BD3', strtoupper('11. Suka Membantu Pekerjaan Ayah/Ibu'));
            $sheet->setCellValue('BE3', strtoupper('12. Siapakah Yang Sering Membantu Jika Tidak Dilakukan Sendiri?'));

            $sheet->setCellValue('BF3', strtoupper('Pernah Mengikuti Test Psikologi?'));
            $sheet->setCellValue('BG3', strtoupper('Intelegensi Berfungsi untuk Taraf (Normal/Sedang/Tinggi)'));
            $sheet->setCellValue('BH3', strtoupper('Sikap ke Ayah'));
            $sheet->setCellValue('BI3', strtoupper('Sikap ke Ibu'));
            $sheet->setCellValue('BJ3', strtoupper('Sikap ke Kakak'));
            $sheet->setCellValue('BK3', strtoupper('Sikap ke Adik'));
            $sheet->setCellValue('BL3', strtoupper('Sikap ke Saudara'));
            $sheet->setCellValue('BM3', strtoupper('Sikap ke Teman'));
            $sheet->setCellValue('BN3', strtoupper('Sikap ke orang Lebih Tua'));
            $sheet->setCellValue('BO3', strtoupper('Sikap ke orang Lebih Kecil'));
            $sheet->setCellValue('BP3', strtoupper('Sikap ke orang Dewasa'));

            $sheet->setCellValue('BQ3', strtoupper('Kepribadian'));

            $sheet->setCellValue('BR3', strtoupper('Orang yang Disenangi'));
            $sheet->setCellValue('BS3', strtoupper('Benda yang Disenangi'));
            $sheet->setCellValue('BT3', strtoupper('Hewan yang Disenangi'));
            $sheet->setCellValue('BU3', strtoupper('Jenis Mainan yang Disenangi'));
            $sheet->setCellValue('BV3', strtoupper('Pelajaran yang Disenangi'));
            $sheet->setCellValue('BW3', strtoupper('Pekerjaan yang Disenangi'));
            $sheet->setCellValue('BX3', strtoupper('Acara TV yang Disenangi'));

            $sheet->setCellValue('BY3', strtoupper('Sekolah/Belajar'));
            $sheet->setCellValue('BZ3', strtoupper('Tidur/Istirahat'));
            $sheet->setCellValue('CA3', strtoupper('Bermain'));
            $sheet->setCellValue('CB3', strtoupper('Nonton Televisi'));

            $sheet->setCellValue('CC3', strtoupper('Asal Sekolah'));
            $sheet->setCellValue('CD3', strtoupper('Nama Sekolah'));
            $sheet->setCellValue('CE3', strtoupper('Lama Belajar'));
            $sheet->setCellValue('CF3', strtoupper('Alamat Sekolah'));
            $sheet->setCellValue('CG3', strtoupper('Tgl.No.STTB'));
            $sheet->setCellValue('CH3', strtoupper('Tanggal Pindah Sekolah'));
            $sheet->setCellValue('CI3', strtoupper('Dari Kelas'));
            $sheet->setCellValue('CJ3', strtoupper('Prestasi yang pernah di raih di Sekolah'));
            $sheet->setCellValue('CK3', strtoupper('Prestasi Luar Sekolah'));

            $sheet->setCellValue('CL3', strtoupper('1. Apa latar belakang dan harapan Bapak/Ibu Memasukkan anak SDIT AL-IZZAH?'));
            $sheet->setCellValue('CM3', strtoupper('2. Setelah anak Bapak/Ibu diterima, kontribusi apa yang akan diberikan untuk kemajuan sekolah ini?'));
            $sheet->setCellValue('CN3', strtoupper('3. Sejak kapan mendapatkan informasi tentang SDIT AL-IZZAH?'));
            $sheet->setCellValue('CO3', strtoupper('4. Dari mana Anda mendapatkan informasi SDIT AL-IZZAH?'));

            $spreadsheet->getActiveSheet()->setCellValue('A1', 'Formulir Pendaftaran SMP');

            $spreadsheet->getActiveSheet()->getStyle('A3:CO3')->getFill()->setFillType(Fill::FILL_SOLID);
            $spreadsheet->getActiveSheet()->getStyle('A3:CO3')->getFill()->getStartColor()->setARGB('d8d8d8');
            $spreadsheet->getActiveSheet()->mergeCells('A1:CO1');
            $spreadsheet->getActiveSheet()->getDefaultRowDimension('3')->setRowHeight(25);
            $sheet->getStyle('A1:CO3')->getFont()->setBold(true);
            $sheet->getStyle('A1:CO3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $row = 3;
            $i=1;

            $searchModel = new FormSd();

            foreach($searchModel->find()->all() as $formsd){
                $row++;
                $sheet->setCellValue('A' . $row, $i);
                $sheet->setCellValue('B' . $row, $formsd->no_daftar);
                $sheet->setCellValue('C' . $row, $formsd->tgl_daftar);
                $sheet->setCellValue('D' . $row, $formsd->tahun->nama);

                $sheet->setCellValue('E' . $row, $formsd->nama_w);
                $sheet->setCellValue('F' . $row, $formsd->usia_w);
                $sheet->setCellValue('G' . $row, $formsd->pekerjaan_w);
                $sheet->setCellValue('H' . $row, $formsd->alamat_w);
                $sheet->setCellValue('I' . $row, $formsd->alamatkantor_w);
                $sheet->setCellValue('J' . $row, $formsd->nm_lengkap_a);
                $sheet->setCellValue('K' . $row, $formsd->panggilan_a);
                $sheet->setCellValue('L' . $row, $formsd->tmptlahir_a);
                // $sheet->setCellValue('M' . $row, $formsd->id_kelas);
                $sheet->setCellValue('M' . $row, $formsd->lengkap_c);
                $sheet->setCellValue('N' . $row, $formsd->panggilan_c);
                $sheet->setCellValue('O' . $row, $formsd->jk->jk);
                $sheet->setCellValue('P' . $row, $formsd->tmptlahir_c);
                $sheet->setCellValue('Q' . $row, $formsd->agama->nama);
                $sheet->setCellValue('R' . $row, $formsd->id_khusus_c);

                $sheet->setCellValue('S' . $row, $formsd->alamat_c);
                $sheet->setCellValue('T' . $row, $formsd->id_jenis_tnggl);
                $sheet->setCellValue('U' . $row, $formsd->id_transport_c);
                $sheet->setCellValue('V' . $row, $formsd->no_c);
                $sheet->setCellValue('W' . $row, $formsd->email_c);

                $sheet->setCellValue('X' . $row, $formsd->nama_b);
                $sheet->setCellValue('Y' . $row, $formsd->id_pendidikan_b);
                $sheet->setCellValue('Z' . $row, $formsd->id_pekerjaan_b);
                $sheet->setCellValue('AA' . $row, $formsd->id_penghasilan_b);
                $sheet->setCellValue('AB' . $row, $formsd->id_khusus_b);
                $sheet->setCellValue('AC' . $row, $formsd->thnlahir_b);

                $sheet->setCellValue('AD' . $row, $formsd->nama_i);
                $sheet->setCellValue('AE' . $row, $formsd->id_pendidikan_i);
                $sheet->setCellValue('AF' . $row, $formsd->id_pekerjaan_i);
                $sheet->setCellValue('AG' . $row, $formsd->id_penghasilan_i);
                $sheet->setCellValue('AH' . $row, $formsd->id_penghasilan_i);
                $sheet->setCellValue('AI' . $row, $formsd->thnlahir_i);

                $sheet->setCellValue('AJ' . $row, $formsd->nama_wl);
                $sheet->setCellValue('AK' . $row, $formsd->thnlahir_w);
                $sheet->setCellValue('AL' . $row, $formsd->id_pendidikan_wl);
                $sheet->setCellValue('AM' . $row, $formsd->id_pekerjaan_wl);
                $sheet->setCellValue('AN' . $row, $formsd->id_penghasilan_wl);

                $sheet->setCellValue('AO' . $row, $formsd->tinggi_a);
                $sheet->setCellValue('AP' . $row, $formsd->berat_a);
                $sheet->setCellValue('AQ' . $row, $formsd->jarak_a);
                $sheet->setCellValue('AR' . $row, $formsd->waktu_tempuh);
                $sheet->setCellValue('AS' . $row, $formsd->saudara_a);

                $sheet->setCellValue('AT' . $row, $formsd->kem_1);
                $sheet->setCellValue('AU' . $row, $formsd->kem_2);
                $sheet->setCellValue('AV' . $row, $formsd->kem_3);
                $sheet->setCellValue('AW' . $row, $formsd->kem_4);
                $sheet->setCellValue('AX' . $row, $formsd->kem_5);
                $sheet->setCellValue('AY' . $row, $formsd->kem_6);
                $sheet->setCellValue('AZ' . $row, $formsd->kem_7);
                $sheet->setCellValue('BA' . $row, $formsd->kem_8);
                $sheet->setCellValue('BB' . $row, $formsd->kem_9);
                $sheet->setCellValue('BC' . $row, $formsd->kem_10);
                $sheet->setCellValue('BD' . $row, $formsd->kem_11);
                $sheet->setCellValue('BE' . $row, $formsd->kem_12);

                $sheet->setCellValue('BF' . $row, $formsd->sos1);
                $sheet->setCellValue('BG' . $row, $formsd->sos2);
                $sheet->setCellValue('BH' . $row, $formsd->getSosa());
                $sheet->setCellValue('BI' . $row, $formsd->getSosb());
                $sheet->setCellValue('BJ' . $row, $formsd->getSosc());
                $sheet->setCellValue('BK' . $row, $formsd->getSosd());
                $sheet->setCellValue('BL' . $row, $formsd->getSose());
                $sheet->setCellValue('BM' . $row, $formsd->getSosf());
                $sheet->setCellValue('BN' . $row, $formsd->getSosg());
                $sheet->setCellValue('BO' . $row, $formsd->getSosh());
                $sheet->setCellValue('BP' . $row, $formsd->getSosi());

                $sheet->setCellValue('BQ' . $row, $formsd->getKepribadian());

                $sheet->setCellValue('BR' . $row, $formsd->kes1);
                $sheet->setCellValue('BS' . $row, $formsd->kes2);
                $sheet->setCellValue('BT' . $row, $formsd->kes3);
                $sheet->setCellValue('BU' . $row, $formsd->kes4);
                $sheet->setCellValue('BV' . $row, $formsd->kes5);
                $sheet->setCellValue('BW' . $row, $formsd->kes6);
                $sheet->setCellValue('BX' . $row, $formsd->kes7);

                $sheet->setCellValue('BY' . $row, $formsd->fre1);
                $sheet->setCellValue('BZ' . $row, $formsd->fre2);
                $sheet->setCellValue('CA' . $row, $formsd->fre3);
                $sheet->setCellValue('CB' . $row, $formsd->fre4);

                $sheet->setCellValue('CC' . $row, $formsd->as1);
                $sheet->setCellValue('CD' . $row, $formsd->as2);
                $sheet->setCellValue('CE' . $row, $formsd->as3);
                $sheet->setCellValue('CF' . $row, $formsd->as4);
                $sheet->setCellValue('CG' . $row, $formsd->as5);
                $sheet->setCellValue('CH' . $row, $formsd->as6);
                $sheet->setCellValue('CI' . $row, $formsd->as7);
                $sheet->setCellValue('CJ' . $row, $formsd->as8);
                $sheet->setCellValue('CK' . $row, $formsd->as9);

                $sheet->setCellValue('CL' . $row, $formsd->ket1);
                $sheet->setCellValue('CM' . $row, $formsd->ket2);
                $sheet->setCellValue('CN' . $row, $formsd->ket3);
                $sheet->setCellValue('CO' . $row, $formsd->getKeterangan4());

                $i++;
            }

            $sheet->getStyle('A3:CO' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('D3:CO' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
            $sheet->getStyle('E3:CO' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);


            $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $sheet->getStyle('A3:CO' . $row)->applyFromArray($setBorderArray);

            $filename = time() . '_FormulirPendaftaranSD_AL-Izzah.xlsx';
            $path = 'document/' . $filename;
            $writer = new Xlsx($spreadsheet);
            $writer->save($path);
            return $this->redirect($path);
        }
    }
    public function actionPdf($id)
    {
        $model = \app\models\FormSd::findOne($id);
        // var_dump($model);
        // die;
        $content = $this->renderPartial('/template/formulirsd', [
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
        $pdf->filename = "Formulir Pendaftaran SD AL AL-IZZAH - ".$date.".pdf";
        return $pdf->render();
    }

}
