<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #444;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
            word-wrap: break-word; /* Ensures long words or messages wrap */
        }

        table th {
            background-color: #f4f4f4;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Add horizontal scrolling for smaller screens */
        .table-container {
            overflow-x: auto;
        }

        /* Responsive styles for smaller screens */
        @media (max-width: 768px) {
            table th, table td {
                padding: 8px;
                font-size: 14px;
            }

            h1 {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 16px;
            }

            table th, table td {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Submissions</h1>
        <div class="table-container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
                <?php
                // Database connection
                $url = parse_url(getenv("JAWSDB_URL"));

                $servername = $url["host"];
                $username = $url["user"];
                $password = $url["pass"];
                $dbname = substr($url["path"], 1);

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT id, name, email, message, submitted_at FROM submissions";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['message']}</td>
                            <td>{$row['submitted_at']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No submissions yet.</td></tr>";
                }

                $conn->close();
                ?>
            </table>
        </div>
    </div>
</body>
</html>
