
<?php
    global $conn;

    require __DIR__ . '/../config.php';

    function query_to_csv($conn, $query, $filename, $attachment = false, $headers = true) {
       
        if($attachment) {
            // send response headers to the browser
            header( 'Content-Type: text/csv' );
            header( 'Content-Disposition: attachment;filename='.$filename);
            $file_output = fopen('php://output', 'w');
        } else {
            $file_output = fopen($filename, 'w');
        }

        fputcsv($file_output, array('JUDET', 'Numar total someri',  'Numar total someri femei',	 'Numar total someri barbati',  
             'Numar  someri indemnizati',  	 'Numar someri neindemnizati', 	  'Rata somajului (%)',  'Rata somajului Feminina (%)',
             'Rata somajului Masculina (%)'));
       
        $result = mysqli_query($conn, $query);
   
       
        while($row = mysqli_fetch_assoc($result)) {
            fputcsv($file_output, $row);
        }
       
        fclose($file_output);
    }

    $sql = "SELECT * FROM ratamartie2020";
    // $db_conn should be a valid db handle

    // output as an attachment
    query_to_csv($conn, $sql, "test.csv", true);
    exit;
?>