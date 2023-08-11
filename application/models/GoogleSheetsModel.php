<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GoogleSheetsModel extends CI_Model
{
    private $apiKey = "AIzaSyBc3GWI7C4_c7EWpbrk8WOcyBWsCjIoFBU";

    private function getSheetData($sheetName, $range, $spreadsheetId)
    {
        $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/{$sheetName}!{$range}?key={$this->apiKey}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $json = curl_exec($ch);
        curl_close($ch);

        return json_decode($json, true); // mengubah format JSON menjadi array
    }

    // DAK FISIK
    public function getDataKota()
    {
        return $this->getSheetData('Sheet1', 'A1:E17', "17xkwfURAkSIPzZ7CN4oTWQGVw2BJ_GPffSsltvG47nU");
    }

    public function getDataBidang()
    {
        return $this->getSheetData('Sheet1', 'H1:L12', "17xkwfURAkSIPzZ7CN4oTWQGVw2BJ_GPffSsltvG47nU");
    }

    public function getDataSubBidang()
    {
        return $this->getSheetData('Sheet1', 'N1:R19', "17xkwfURAkSIPzZ7CN4oTWQGVw2BJ_GPffSsltvG47nU");
    }

    public function getDataKppn()
    {
        return $this->getSheetData('Sheet1', 'T1:X5', "17xkwfURAkSIPzZ7CN4oTWQGVw2BJ_GPffSsltvG47nU");
    }

    // DANA DESA
    public function getDataDesa()
    {
        return $this->getSheetData('Sheet1', 'A1:J1508', "18EQIKVmJwgWaUykKxTuvyXTYG1XMH2r2Fo40-wpwZEs");
    }

    public function getDataKabupaten()
    {
        return $this->getSheetData('Sheet1', 'L1:T13', "18EQIKVmJwgWaUykKxTuvyXTYG1XMH2r2Fo40-wpwZEs");
    }

    // DANA DBH
    public function getDBH()
    {
        return $this->getSheetData('Sheet1', 'A1:P17', "1fVADzZnAAqhed7F1N468y7E1yr6ghyuGBJRJLvxuIjk");
    }

    // DANA DAU
    public function getDAU()
    {
        return $this->getSheetData('Sheet1', 'A1:P17', "1HTRkAFb_2wMbBfLX0rOYFUGK9wNz2WppcVPoKIi3VR0");
    }

    // DANA BO
    public function getBO()
    {
        return $this->getSheetData('Sheet1', 'A1:P18', "1BTvzXyJcq39TusfHPM-C9vksq0cjf1E59O0jJbaxJEU");
    }

    // Dashboard Laporan
    public function getDashLap()
    {
        return $this->getSheetData('Sheet4', 'A1:AH297', "178U19eBIKshTNApuXQknR1JkkrQd5P3MrhpZxW1OjkY");
    }
}
