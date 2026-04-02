<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        .submit-btn {
            background: linear-gradient(90deg, #6b48ff, #ff6f91);
            border: none;
            color: white;
            transition: background 0.3s ease;
        }
        .submit-btn:hover {
            background: linear-gradient(90deg, #ff6f91, #6b48ff);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Employee Details Form</h2>
        <form action="insert_employee.php" method="POST" id="employeeForm">
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label fw-bold">Address</label>
                <textarea class="form-control" id="address" name="address" placeholder="Enter full address" required></textarea>
            </div>
            <div class="mb-3">
                <label for="joining-date" class="form-label fw-bold">Joining Date</label>
                <input type="date" class="form-control" id="joining-date" name="joining-date" required>
            </div>
            <div class="mb-3">
                <label for="shift-time" class="form-label fw-bold">Shift Time</label>
                <input type="time" class="form-control" id="shift-time" name="shift-time" required>
            </div>
            <div class="mb-3">
                <label for="employee-id" class="form-label fw-bold">Employee ID (Number)</label>
                <input type="number" class="form-control" id="employee-id" name="employee-id" placeholder="Enter employee ID" required>
            </div>
            <div class="mb-3">
                <label for="department" class="form-label fw-bold">Department</label>
                <select class="form-select" id="department" name="department" required>
                    <option value="" disabled selected>Select Department</option>
                    <option value="hr">Human Resources</option>
                    <option value="it">Information Technology</option>
                    <option value="finance">Finance</option>
                    <option value="marketing">Marketing</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Skills</label>
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="communication" id="communication">
                        <label class="form-check-label" for="communication">Communication</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="leadership" id="leadership">
                        <label class="form-check-label" for="leadership">Leadership</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="technical" id="technical">
                        <label class="form-check-label" for="technical">Technical</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="skills[]" value="teamwork" id="teamwork">
                        <label class="form-check-label" for="teamwork">Teamwork</label>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Availability</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="availability" name="availability">
                    <label class="form-check-label" id="availability-label">Unavailable</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label fw-bold">Additional Notes</label>
                <textarea class="form-control" id="notes" name="notes" placeholder="Enter any additional notes or comments"></textarea>
            </div>
            <button type="submit" class="btn submit-btn w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>