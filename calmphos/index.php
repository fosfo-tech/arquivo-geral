<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivos Andrographis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #f4f4f4;
        }
        table tr:hover {
            background-color: #f9f9f9;
        }
        .filename {
            color: #007bff;
            text-decoration: none;
        }
        .filename:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Arquivos Andrographis</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome do Arquivo</th>
                    <th>Tamanho do Arquivo (KB)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Obter todos os arquivos no diretório atual
                $files = scandir('.');
                
                // Loop através dos arquivos
                foreach($files as $file) {
                    // Ignorar arquivos ocultos e diretórios
                    if($file != '.' && $file != '..' && !is_dir($file)) {
                        // Calcular o tamanho em KB
                        $sizeInKb = filesize($file) / 1024;
                        echo "<tr>";
                        echo "<td><a href='$file' class='filename'>$file</a></td>";
                        echo "<td>" . number_format($sizeInKb, 2) . " KB</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
