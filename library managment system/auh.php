<!DOCTYPE html> <html> <head>     <title>Library Management System</title>     <link rel="stylesheet" type="text/css" href="css/style.css"> </head> <body>     <div class="container">         <h1>Welcome to the Library Management System</h1>         <img src="images/library.png" alt="Library" class="banner">         <p>             <!-- PHP code to check if user is logged in and display appropriate links will be added later -->         </p>                  <!-- Book Search Form -->         <div class="search-container">             <h2>Book Search</h2>             <form method="GET" action="index.php">                 <label for="search">Search:</label>                 <input type="text" id="search" name="search" required>                 <button type="submit">Search</button>             </form>         </div>          <!-- PHP code to display search results will be added later -->         <div class="search-results">             <h2>Search Results</h2>             <!-- Search results will be displayed here -->         </div>     </div> </body> </html>  public/register.php <!DOCTYPE html> <html> <head>     <title>Register - Library Management System</title>     <link rel="stylesheet" type="text/css" href="css/style.css"> </head> <body class="centered">     <div class="form-container">         <h2>Register</h2>         <!-- Registration form -->         <form method="POST" action="register.php">             <label for="name">Name:</label>             <input type="text" id="name" name="name" required><br>             <label for="email">Email:</label>             <input type="email" id="email" name="email" required><br>             <label for="password">Password:</label>             <input type="password" id="password" name="password" required><br>             <button type="submit">Register</button>         </form>         <div>             <!-- PHP code to display registration message will be added later -->         </div>  