<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Онлайн-чат в реальном времени</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="users">
        <header>
          <div class="content">
            <img src="./pfp.png" alt="" />
            <div class="details">
              <span>Anton Gandonio</span>
              <p>В сети</p>
            </div>
          </div>
          <a href="" class="logout">Выйти из аккаунта</a>
        </header>
        <div class="search">
          <span class="text">Нажмите чтобы начать общаться</span>
          <input type="text" placeholder="Искать по имени" />
          <button style="border-radius: 5px;" type="submit"><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>Test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>Test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>This is a test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>Test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>Test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
          <a href="#">
            <div class="content">
              <img src="./pfp.png" alt="" />
              <div class="details">
                <span>Gandon Antonio</span>
                <p>Test message</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"></i>
            </div>
          </a>
        </div>
      </section>
    </div>
    <script src="./javascript/users-search.js"></script>
  </body>
</html>