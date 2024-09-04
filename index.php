<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container mt-5 align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm custom-card mx-auto">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Contact Form</h2>
                        <form method="post" action="process.php"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Name</label>
                                        <div class="input-group">
                                            <input name="Nama" type="text" class="form-control" id="name" placeholder="Your Name" required>
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="class" class="form-label">Class</label>
                                        <div class="input-group">
                                            <input name="Class" type="text" class="form-control" id="class" placeholder="Your Class" required>
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="form-label">Email address</label>
                                        <div class="input-group">
                                            <input name="Email" type="email" class="form-control" id="email" placeholder="name@example.com" required>
                                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="date" class="form-label">Date</label>
                                        <div class="input-group">
                                            <input name="Date" type="date" class="form-control" id="date" required>
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="phone" class="form-label">Phone Number</label>
                                        <div class="input-group">
                                            <input name="Phone" type="tel" class="form-control" id="phone" placeholder="Your Phone Number" required>
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex flex-column">
                                    <div class="mb-4 flex-grow-1">
                                        <label for="suggestion" class="form-label">Suggestion</label>
                                        <textarea name="Send" class="form-control h-100" id="suggestion" rows="8" placeholder="Your text..." required></textarea>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button type="submit" class="btn btn-dark custom-button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
