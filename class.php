<?php

/**
  класс модуля
 * */

namespace Nyos\api;

if (!defined('IN_NYOS_PROJECT'))
    throw new \Exception('Сработала защита от розовых хакеров, обратитесь к администрратору');

class FacebookParser {

    //public static $sql_host = '';

//    public static function getTimerExpectation($db, string $sp_id, $date_start, $date_fin) {
//
//        try {
//
//            $sql = 'SELECT 
//                    sp,
//                    date,
//                    hot,
//                    cold,
//                    delivery
//                FROM 
//                    `sushi_time_waiting`
//                WHERE
//                    `sp` = :sp_id
//                    '
//                    .'
//                    AND `date` >= :date_start 
//                    '
//                    .'
//                    AND date <= :date_fin 
//                    '
//                    ;
//
//            // echo '<pre>' . $sql . '</pre>';
//
//            $ff = $db->prepare($sql);
//            $db2 = array(
//                ':sp_id' => $sp_id,
//                ':date_start' => date('Y-m-d', strtotime($date_start)) ,
//                ':date_fin' => date('Y-m-d', strtotime($date_fin)),
//            );
//            // \f\pa($db2);
//            $ff->execute($db2);
//
//            //$return = $ff->fetchAll();
//            $return = [];
//            while( $r = $ff->fetch() ){
//                $return[$r['date']] = $r;
//            }
//            // \f\pa($return);
//
//            return $return;
//
////        $return = [];
////        while ($e = $ff->fetch()) {
////            \f\pa($e);
////            $return[$e['date'] ?? ''][$e['sp']][$e['otdel']] = $e['minut'];
////        }
////
////        \f\pa($return);
////        file_put_contents($cash_file, json_encode($return));
//        } catch (\PDOException $ex) {
//
////            echo '<pre>--- ' . __FILE__ . ' ' . __LINE__ . '-------'
////            . PHP_EOL . $ex->getMessage() . ' #' . $ex->getCode()
////            . PHP_EOL . $ex->getFile() . ' #' . $ex->getLine()
////            . PHP_EOL . $ex->getTraceAsString()
////            . '</pre>';
//
//            if (strpos($ex->getMessage(), 'no such table') !== false) {
//                self::creatTable($db);
//                return array();
//            }
//        }
//
//     //   return $return;
//    }

}
