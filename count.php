<?php
				// lê o conteúdo do arquivo para uma string
					$handle = fopen("Views.numerox", "r+");// Leitura e escrita
					$conteudo = fread($handle, 1024);// Lê até 1024
					$nvalor = $conteudo + 1;// incrementa mais um valor 
					echo "$nvalor views ❤";
					fseek($handle,0);
					fwrite($handle, $nvalor);
					fclose ($handle);
?>
