<?php
/* For licensing terms, see /license.txt */

require_once '../inc/global.inc.php';

$allow = api_get_configuration_value('extra');
if (empty($allow)) {
    exit;
}

$tbl_stats_exercices = Database::get_main_table(TABLE_STATISTIC_TRACK_E_EXERCISES);

//$ex_idd =isset($_POST['exe_id'])?$_POST['exe_id']:"";
//$ex_user_id =isset($_POST['ex_user_id'])?$_POST['ex_user_id']:"";
//$mod_no=isset($_POST['mod_no'])?$_POST['mod_no']:"";
//$score_ex=isset($_POST['score_ex'])?$_POST['score_ex']:"";
//$score_rep1=isset($_POST['score_rep1'])?$_POST['score_rep1']:"";
//$score_rep2=isset($_POST['score_rep2'])?$_POST['score_rep2']:"";
//$coment=isset($_POST['coment'])?$_POST['coment']:"";
//$student_id =isset($_POST['student_id'])?$_POST['student_id']:"";

foreach ($_POST as $index => $valeur) {
    $$index = Database::escape_string(trim($valeur));
}
$sql4 = "UPDATE $tbl_stats_exercices SET 
          mod_no='$mod_no', score_ex='$score_ex', score_rep1='$score_rep1', score_rep2='$score_rep2', coment='$coment'
		WHERE exe_id = '$ex_idd'
    ";
Database::query($sql4);
header("location:../extra/myStudents.php?student=$student_id");
exit;
