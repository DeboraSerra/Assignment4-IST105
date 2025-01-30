<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      .form {
        border: 1px solid #999;
        border-radius: 4px;
        padding: 12px 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        max-width: 500px;
        margin: 128px auto 0;
      }

      .label {
        display: flex;
        flex-direction: column;
        gap: 4px;
        width: 100%;
      }

      .label span {
        font-size: 16px;
      }

      .label input {
        padding: 4px;
        font-size: 16px;
        border: 1px solid #cdcdcd;
        border-radius: 4px;
      }

      .label input:focus {
        outline: none;
        border-color: #a0a0a0;
      }

      button {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #710000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <form action="process.php" method="post" class="form">
      <h1>Welcome to server <b>1</b></h1>
      <label class="label" for="a">
        <span>Input a value for <b>a</b></span>
        <input id="a" name="a" type="text" />
      </label>
      <label class="label" for="b">
        <span>Input a value for <b>b</b></span>
        <input id="b" name="b" type="text" />
      </label>
      <label class="label" for="c">
        <span>Input a value for <b>c</b></span>
        <input id="c" name="c" type="text" />
      </label>
      <button type="submit">Calculate</button>
    </form>
  </body>
</html>
