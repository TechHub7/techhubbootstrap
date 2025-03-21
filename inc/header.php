<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Hub Store</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <style>
        nav{
          display: flex;
          justify-content: center;
          align-items: center;
          flex-wrap: wrap;
          margin-top: 15px;
        }
        nav a{
            color: white;
            text-decoration: none;
        }
        nav a:hover{
          text-decoration: underline;
        }
        header label{
          display: none;
        }
        @media (max-width: 975px) {
            body header label{
              display: block;
              cursor: pointer;
              padding: 10px;
              font-size: 2rem;
              color: white;
              border-radius: 5px;
              text-align: center;
              width: 40px;
              height: 40px;
          }
          header nav{
            display: none;
            top: 72px;
            flex-direction: column;
            width: 100%;
            text-align: center;
            font-size: 17px;
          }
          header nav a{
            color: white;
            margin: 10px 0px;
          }
          header nav a:hover{
            color: white;
            text-decoration: underline;
          }
          header nav a:active{
            color: blue;
          }
          #menu:checked ~ nav {
                display: flex;
            }
          #menu{
            display: none;
          }
        }
    </style>
</head>
<body>
    <header class="bg-primary text-light p-3">
      <input type="checkbox" id="menu" hidden>
        <div class="container d-flex justify-content-between align-items-center">
          <!-- Tech Hub Section with TECH on top and HUB STORE below -->
          <div class="d-flex flex-column gap-0">
            <h2>TECH HUB</h2>
            <h3>STORE <img src="./img/laptop (2).png" alt="store"></h3> <!-- STORE below TECH HUB -->
          </div>
    
          <!-- Search Input -->
          <input type="search" class="form-control" placeholder="Search for Products/Gadgets" style="width: 300px;">
    
          <!-- Sign in and Cart Links -->
          <div>
            <a href="./login.php" class="text-light ms-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAURJREFUSEvF1L8rRXEYx/HXTWaEwSiZLIpVRgulKBaLzWLwa7QopURS/gRZ5FcW/wAlGWQiIykMKKX8OKdc3c69557bOW6+2znn+3zen+fp85ycKp9clfVVCujFIjp+DF1gDsdJBisBjGKTIjOfGMRBOUgSoB43aIgRuUMb3uIgSYDQ4U7CGPpwlBYwjeUEwBRW0wIGsJ8A6MdhWkAdrtEUI3CPdrykBYR1I9gqIRCmaAi7WVKUr+3B0s8efOASszj5iz1I0ij7PSmmmcTD4nKAZswEm9oVzLkTjRHaI85xihU8lHITBxgLBNeDfIcpquQ8YRx70culAJPBr2GtEtUSd4axXfg+CmjFFWpSAl4RavyOKwrYwERK8XzZfGBwIf8QBdyiJSPgDN1xgHfUZgQ8F4Yj2sFXRvEi4/+6aH/STNU7+AYkwS0ZwQsJ3gAAAABJRU5ErkJggg=="/></a>
            <a href="cart" class="text-light ms-3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARlJREFUSEvN1DEvBVEQhuHnRjRaiehEzQ9QqTQKnUKjFjQq8Rf0yC1UGlHoFBqFSvQUao1Eo1FJsEd2k83N3j1nd62YZoszM+9855uzAz3HoOf+/hTwlat5xyn2fkNdWUEBKPqu4KYrpOqK9nGIK6z1AZjGCyYwh+cukHEmn2GzQ+MLbIT6cYAl3HUAPGKxDhDOHrDQEnKQ+1j7DrYwbAH4zOpm8RpTMJUnhW+TuMZqURB7yUcZZLdJ99zcYPJPxADBg+BFarxhBh+pgJB3i+VEQvBsu5wbUxBywz6fJwLCet83BUziCfMRyGV2neujOSkKEoevTksFHGMnM/CkYqvqzqJbVIxV/pWPDlV3lgzoXUFrH1I9+L+Ab1GOKRnFFj/fAAAAAElFTkSuQmCC"/></a>
          </div>
        </div>
        <!-- Mobile Menu Toggle -->
        <label for="menu">&#9776;</label>
        <!-- Navigation -->
        <nav>
            <a href="./korea.php" class="mx-2">SAMSUNG</a>
            <a href="./usa.php" class="mx-2">IPHONES</a>
            <a href="" class="mx-2">REDMI</a>
            <a href="" class="mx-2">ITEL</a>
            <a href="" class="mx-2">TECNO</a>
            <a href="" class="mx-2">AIRPODS</a>
            <a href="" class="mx-2">LAPTOPS</a>
            <a href="" class="mx-2">WATCHES</a>
        </nav>
      </header>
</body>