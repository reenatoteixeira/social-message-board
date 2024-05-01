<?php
require_once('config/database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Social Messager</title>
</head>

<body class="bg-sky-200">
  <header>
    <a href="/">
      LOGO
    </a>

    <ul>
      <li><a href="/">About us</a></li>
    </ul>
  </header>

  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <button id="new-msg-btn" type="button" class="bg-white p-3 rounded-lg m-4 shadow-lg">
      Leave message
    </button>

    <section class="grid grid-cols-1">
      <div class="bg-white p-4 shadow-lg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex laborum minus rerum laboriosam recusandae repudiandae excepturi quaerat, ducimus eos earum, porro culpa molestiae quae eligendi veniam iste voluptate aliquid eaque!</p>
      </div>
    </section>

    <dialog id="new-msg-modal">
      <h2>
        Leave your message
      </h2>
      <button id="close-modal-btn">Close modal</button>
      <p>Messages cannot be edited or deleted.</p>
      <textarea name="message" id="message" rows="5"></textarea>
      <button>Save</button>
    </dialog>
  </main>
</body>

</html>