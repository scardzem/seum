<?php
    header('Content-Type: text/html; charset=utf-8');//추가
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/171-session.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/common/179-checkSignSession.php';
    include $_SERVER['DOCUMENT_ROOT'].'/php200project/connection/163-connection.php';

    $sql = "SELECT kind FROM survey";
    $result = $dbConnect->query($sql);

    if($result){
        $surveyDataCount = $result->num_rows;

        $offlineStore = 0;
        $onlineStore = 0;
        $website = 0;
        $friends = 0;
        $academy = 0;
        $noMemory = 0;
        $etc = 0;

        if($surveyDataCount > 0){
            for($i = 0; $i < $surveyDataCount; $i++){
                $surveyData = $result->fetch_array(MYSQLI_ASSOC);

                switch($surveyData['kind']){
                    case 'offlineStore':
                        $offlineStore++;
                        break;
                    case 'onlineStore':
                        $onlineStore++;
                        break;
                    case 'website':
                        $website++;
                        break;
                    case 'friends':
                        $friends++;
                        break;
                    case 'academy':
                        $academy++;
                        break;
                    case 'noMemory':
                        $noMemory++;
                        break;
                    case 'etc':
                        $etc++;
                        break;
                }
            }

            echo json_encode(
                array(
                    'result' => 'ok',
                    'offlineStore' => $offlineStore,
                    'onlineStore' => $onlineStore,
                    'website' => $website,
                    'friends' => $friends,
                    'academy' => $academy,
                    'noMemory' => $noMemory,
                    'etc' => $etc,
                )
            );
        } else {
            echo json_encode(
                array(
                    'result' => 'noData'
                )
            );
        }
    } else {
        echo json_encode(
            array(
                'result' => 'error'
            )
        );
    }
?>