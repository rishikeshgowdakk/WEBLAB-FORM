<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorted Student Records | JSSATEB</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #333;
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        .student-info {
            text-align: left;
            margin-bottom: 20px;
            padding: 12px 15px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            font-size: 0.95em;
            font-weight: bold;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        h2 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
            font-size: 2em;
        }
        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }
        th, td {
            padding: 14px 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
        th {
            background-color: #667eea;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            font-weight: 600;
        }
        tr:hover {
            background-color: #f8f9ff;
        }
        td {
            font-size: 0.95em;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="student-info">
        <strong>Name:</strong> Rishikesh Gowda K K<br>
        <strong>USN:</strong> 1JS23CS136
    </div>
    
    <h2>Sorted Student Records by Name</h2>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>USN</th>
                <th>Branch</th>
                <th>Email</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody id="tableBody">
        </tbody>
    </table>

    <script>
        // Student data
        const students = [
            {id: 1, name: 'Aarav Singh', usn: '1JS23CS001', branch: 'CSE', email: 'aarav@jssateb.ac.in', address: 'Bangalore'},
            {id: 2, name: 'Bhavna Sharma', usn: '1JS23CS002', branch: 'CSE', email: 'bhavna@jssateb.ac.in', address: 'Delhi'},
            {id: 3, name: 'Chirag Patel', usn: '1JS23CS003', branch: 'CSE', email: 'chirag@jssateb.ac.in', address: 'Mumbai'},
            {id: 4, name: 'Disha Gupta', usn: '1JS23CS004', branch: 'CSE', email: 'disha@jssateb.ac.in', address: 'Pune'},
            {id: 5, name: 'Eshan Kumar', usn: '1JS23CS005', branch: 'CSE', email: 'eshan@jssateb.ac.in', address: 'Chennai'},
            {id: 6, name: 'Zara Khan', usn: '1JS23CS006', branch: 'CSE', email: 'zara@jssateb.ac.in', address: 'Hyderabad'},
        ];

        // Selection Sort Algorithm
        function selectionSort(arr, key) {
            let n = arr.length;
            for (let i = 0; i < n - 1; i++) {
                let minIndex = i;
                for (let j = i + 1; j < n; j++) {
                    if (arr[j][key].toLowerCase() < arr[minIndex][key].toLowerCase()) {
                        minIndex = j;
                    }
                }
                if (minIndex !== i) {
                    [arr[i], arr[minIndex]] = [arr[minIndex], arr[i]];
                }
            }
            return arr;
        }

        // Sort students by name and display
        const sortedStudents = selectionSort([...students], 'name');
        const tableBody = document.getElementById('tableBody');
        
        sortedStudents.forEach(student => {
            const row = `<tr>
                <td>${student.id}</td>
                <td>${student.name}</td>
                <td>${student.usn}</td>
                <td>${student.branch}</td>
                <td>${student.email}</td>
                <td>${student.address}</td>
            </tr>`;
            tableBody.innerHTML += row;
        });
    </script>
</body>
</html>
