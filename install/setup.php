<?php

//Created By Salman Iqbal
//Company Parexons
//Date 11/25/2016

$db_config = "../application/config/database.php";

if (isset($_POST)) {

	//taking values for database setup
	$hostname = $_POST['hostname'];
	$db_name  = $_POST['db_name'];
	$username = $_POST['username'];
	$db_pass  = $_POST['db_pass'];
	$site_url = $_POST['site_url'];

	$driver = $_POST['driver'];
	$port = $_POST['port'];
	$charset = $_POST['charset'];
	$collation = $_POST['db_collation'];


	if (isset($_POST['submit']) == TRUE) {

		/// Create connection
		$con = new mysqli($hostname, $username, $db_pass, '');

		// Check connection
		if ($con->connect_error) {
			die("Connection failed: " . $con->connect_error);
			//echo  '<script type="text/javascript">window.location = "index.php?err_msg='."Falha na conexão: " . $con->connect_error.'"</script>';
			//exit();
		}


		//if database exits then run this script  
		else {

			//Check if database exists or not
			if (mysqli_select_db($con, $db_name)) {
				$notification_error = "error";

				echo  '<script type="text/javascript">
             window.location = "index.php?err_msg=O banco de dados já existe. Tente com outro nome."
            </script>';
				exit();
			}

			//create database
			$query = "CREATE DATABASE IF NOT EXISTS " . $db_name;

			//If query run successfully
			if ($con->query($query) == TRUE) {

				//if post exists
				if (isset($_POST['submit']) == TRUE) {
					// Open the default SQL file
					$query = file_get_contents('sql_files/login_db.sql');

					//Select database for tables insertion
					$dbSelector = "Use `" . $db_name . "`; ";

					$query = $dbSelector . $query;

					// Execute a multi query
					if ($con->multi_query($query)) {
						do {

							// fetch results
							if (!$con->more_results()) {
								break;
							}

							//For more results
							if (!$con->next_result()) {
								if ($con->errno) {
									if ($con->error === "A variável 'sql_mode' não pode ser definida como o valor de 'NULL'") {
										return true;
									} else {
										die("FAIL::" . $con->error . "::error");
									}
								}
								break;
							}
						} while (true);
					}
				}

				//Now Seting Hostname,username,password,Database name in config/database  
				if (isset($_POST['submit']) == TRUE) {

					// Config path
					$install_path    = 'config/database.php';
					$output_path   = '../application/config/database.php';

					// Open the file
					$database_file = file_get_contents($install_path);

					$new  = str_replace("%HOSTNAME%", $hostname, $database_file);
					$new  = str_replace("%USERNAME%", $username, $new);
					$new  = str_replace("%PASSWORD%", $db_pass, $new);
					$new  = str_replace("%DATABASE%", $db_name, $new);

					$new  = str_replace("%DRIVER%", $driver, $new);
					$new  = str_replace("%CHARSET%", $charset, $new);
					$new  = str_replace("%COLLATE%", $collation, $new);
					$new  = str_replace("%PORT%", $port, $new);

					// Write the new database.php file
					$handle = fopen($output_path, 'w+');

					// Chmod the file, in case the user forgot
					@chmod($output_path, 0777);

					// Verify file permissions
					if (is_writable($output_path)) {

						// Write the file
						if (fwrite($handle, $new)) {

							// echo "create";
						} else {
							return false;
						}
					} else {
						return false;
					}
				}

				// Now setting base url in config/config.php
				if (isset($_POST['submit']) == TRUE) {

					//config path
					$local_path   = "config/config.php";
					$replace_path = "../application/config/config.php";

					//geting content of local config file
					$config_file  = file_get_contents($local_path);

					$new = str_replace('%BASE_URL%', $site_url, $config_file);

					//getting file config for replacing base url
					$write = fopen($replace_path, "w+");

					// Chmod the file, in case the user forgot
					@chmod($replace_path, 0777);

					// Verify file permissions
					if (is_writable($replace_path)) {
						// Write the file
						if (fwrite($write, $new)) {
							echo  '<script type="text/javascript">
                      window.location = "../users/Auth/login/?success_msg=Configuração concluída com êxito, faça o login no sistema."
                     </script>';
						} else {
							return FALSE;
						}
					} else {
						return FALSE;
					}
				}
			}

			//If error in database
			else {
				echo "Erro ao criar banco de dados" . $con->error;
			}

			$con->close();
		}
	}
}
//end of file
//install/setup.php
