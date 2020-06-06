
<?php
class CSV
{
    public $conn; 
    public function __construct($data, $criteriu)
    {

        require __DIR__ . '/../config.php';



        $sql = "SELECT * FROM " . $data . " ";
        // $db_conn should be a valid db handle

        // output as an attachment
        $this->query_to_csv($conn, $criteriu, $sql, "somaj.csv", true);
        exit;
    }

    function query_to_csv($conn, $criteriu, $query, $filename, $attachment = false, $headers = true)
    {

        if ($attachment) {
            // send response headers to the browser
            header('Content-Type: text/csv');
            header('Content-Disposition: attachment;filename=' . $filename);
            $file_output = fopen('php://output', 'w');
        } else {
            $file_output = fopen($filename, 'w');
        }

        if ($criteriu == "numar-rata") {

            fputcsv($file_output, array(
                'JUDET', 'Numar total someri',  'Numar total someri femei',     'Numar total someri barbati',
                'Numar  someri indemnizati',       'Numar someri neindemnizati',       'Rata somajului (%)',  'Rata somajului Feminina (%)',
                'Rata somajului Masculina (%)'
            ));
        } elseif ($criteriu == "varste") {
            fputcsv($file_output, array(
                'JUDET', 'Sub25',  '25-29',     '30-39', '39-40',       '40-49',       '50-55',  'Peste55'
            ));
        } elseif ($criteriu == "medii") {
            fputcsv($file_output, array(
                'JUDET', 'Nr. Urban',  'Nr. F. Urban',     'Nr. B. Urban', 'Nr Rural',       'Nr F. Rural',       'Nr. B. Rural'

            ));
        } elseif ($criteriu == "educatie") {

            fputcsv($file_output, array(
                'JUDET', 'Fara studii',  'invatamant_primar',     'invatamant_gimnazial', 'invatamant_liceal',   'invatamant_postliceal',
                'invatamant_profesional',  'invatamant_universitar'
            ));
        }

        $result = mysqli_query($conn, $query);


        while ($row = mysqli_fetch_assoc($result)) {
            fputcsv($file_output, $row);
        }

        fclose($file_output);
    }
}
?>