<?php
//------------------------------------------------------------------------------------------------------------------------------------------


	if ($_REQUEST['send']) {

		$name = $_REQUEST['nameForm'];
		$phone = $_REQUEST['phoneForm'];
		$agreement = filter_var($_REQUEST['agreement'], FILTER_VALIDATE_BOOLEAN);
        $source = $_REQUEST['formButton'];
        $page = $_REQUEST['formPage'];
        $calc = $_REQUEST['calcStatus'];
        $error = 0;
        $txt = 0;

		if ($name && $phone && $agreement) {
            //echo $name . ' ' . $phone . ' ' . $agreement;
            $txt = 'Ваша заявка отправлена!';
            echo json_encode(Array("error" => $error, "success" => $txt));
        }
        elseif(!$name) {
			$error = 1;
            $txt = 'Ошибка!';
			echo json_encode(Array("error" => $error, "success" => $txt));
		}
        elseif(!$phone) {
			$error = 2;
            $txt = 'Ошибка!';
			echo json_encode(Array("error" => $error, "success" => $txt));
		} else {
			$error = 3;
            $txt = 'Ошибка!';
			echo json_encode(Array("error" => $error, "success" => $txt));
		}
        
    }

    