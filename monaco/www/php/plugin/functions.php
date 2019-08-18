<?php
		/**********************************************************************/
		/**********************************************************************/

		function formatValue($value)
		{
			if(isGPC()) return(stripslashes($value));
			return($value);
		}

		/**********************************************************************/

		function isGPC()
		{
			return((bool)ini_get('magic_quotes_gpc'));
		}

		/**********************************************************************/

		function isEmpty($value)
		{
			return(!(bool)mb_strlen($value));
		}

		/**********************************************************************/

		function createResponse($response)
		{
			echo json_encode($response);
			exit;
		}

		/**********************************************************************/

		function validateEmail($email)
		{
			if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i',$email,$result)) return(false);
			else return(true);
		}

		/**********************************************************************/
?>